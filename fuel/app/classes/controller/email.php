<?php
class Controller_Email extends Controller_Template 
{

	public function action_index()
	{
		$data['emails'] = Model_Email::find('all');
		$this->template->title = "Emails";
		$this->template->content = View::forge('email/index', $data);

	}

	public function action_view($id = null)
	{
		$data['email'] = Model_Email::find($id);

		is_null($id) and Response::redirect('Email');

		$this->template->title = "Email";
		$this->template->content = View::forge('email/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Email::validate('create');
			
			if ($val->run())
			{
				$email = Model_Email::forge(array(
					'template_id' => Input::post('template_id'),
					'send_began' => Input::post('send_began'),
					'send_end' => Input::post('send_end'),
					'subject' => Input::post('subject'),
					'body' => Input::post('body'),
					'success' => Input::post('success'),
					'fails' => Input::post('fails'),
					'bounces' => Input::post('bounces'),
					'unsubscribes' => Input::post('unsubscribes'),
				));

				if ($email and $email->save())
				{
					Session::set_flash('success', 'Added email #'.$email->id.'.');

					Response::redirect('email');
				}

				else
				{
					Session::set_flash('error', 'Could not save email.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Emails";
		$this->template->content = View::forge('email/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Email');

		$email = Model_Email::find($id);

		$val = Model_Email::validate('edit');

		if ($val->run())
		{
			$email->template_id = Input::post('template_id');
			$email->send_began = Input::post('send_began');
			$email->send_end = Input::post('send_end');
			$email->subject = Input::post('subject');
			$email->body = Input::post('body');
			$email->success = Input::post('success');
			$email->fails = Input::post('fails');
			$email->bounces = Input::post('bounces');
			$email->unsubscribes = Input::post('unsubscribes');

			if ($email->save())
			{
				Session::set_flash('success', 'Updated email #' . $id);

				Response::redirect('email');
			}

			else
			{
				Session::set_flash('error', 'Could not update email #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$email->template_id = $val->validated('template_id');
				$email->send_began = $val->validated('send_began');
				$email->send_end = $val->validated('send_end');
				$email->subject = $val->validated('subject');
				$email->body = $val->validated('body');
				$email->success = $val->validated('success');
				$email->fails = $val->validated('fails');
				$email->bounces = $val->validated('bounces');
				$email->unsubscribes = $val->validated('unsubscribes');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('email', $email, false);
		}

		$this->template->title = "Emails";
		$this->template->content = View::forge('email/edit');

	}

	public function action_delete($id = null)
	{
		if ($email = Model_Email::find($id))
		{
			$email->delete();

			Session::set_flash('success', 'Deleted email #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete email #'.$id);
		}

		Response::redirect('email');

	}


}