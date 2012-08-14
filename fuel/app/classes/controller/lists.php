<?php
class Controller_Lists extends Controller_Template 
{

	public function action_index()
	{
		$data['lists'] = Model_List::find('all');
		$this->template->title = "Lists";
		$this->template->content = View::forge('lists/index', $data);

	}

	public function action_view($id = null)
	{
		$data['list'] = Model_List::find($id);

		is_null($id) and Response::redirect('Lists');

		$this->template->title = "List";
		$this->template->content = View::forge('lists/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_List::validate('create');
			
			if ($val->run())
			{
				$list = Model_List::forge(array(
					'list_id' => Input::post('list_id'),
					'user_id' => Input::post('user_id'),
					'list_name' => Input::post('list_name'),
				));

				if ($list and $list->save())
				{
					Session::set_flash('success', 'Added list #'.$list->id.'.');

					Response::redirect('lists');
				}

				else
				{
					Session::set_flash('error', 'Could not save list.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Lists";
		$this->template->content = View::forge('lists/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('Lists');

		$list = Model_List::find($id);

		$val = Model_List::validate('edit');

		if ($val->run())
		{
			$list->list_id = Input::post('list_id');
			$list->user_id = Input::post('user_id');
			$list->list_name = Input::post('list_name');

			if ($list->save())
			{
				Session::set_flash('success', 'Updated list #' . $id);

				Response::redirect('lists');
			}

			else
			{
				Session::set_flash('error', 'Could not update list #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$list->list_id = $val->validated('list_id');
				$list->user_id = $val->validated('user_id');
				$list->list_name = $val->validated('list_name');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('list', $list, false);
		}

		$this->template->title = "Lists";
		$this->template->content = View::forge('lists/edit');

	}

	public function action_delete($id = null)
	{
		if ($list = Model_List::find($id))
		{
			$list->delete();

			Session::set_flash('success', 'Deleted list #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete list #'.$id);
		}

		Response::redirect('lists');

	}


}