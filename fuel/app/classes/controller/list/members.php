<?php
class Controller_List_Members extends Controller_Template 
{

	public function action_index()
	{
		$data['list_members'] = Model_List_Member::find('all');
		$this->template->title = "List_members";
		$this->template->content = View::forge('list\members/index', $data);

	}

	public function action_view($id = null)
	{
		$data['list_member'] = Model_List_Member::find($id);

		is_null($id) and Response::redirect('List_Members');

		$this->template->title = "List_member";
		$this->template->content = View::forge('list\members/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_List_Member::validate('create');
			
			if ($val->run())
			{
				$list_member = Model_List_Member::forge(array(
					'member_id' => Input::post('member_id'),
					'list_id' => Input::post('list_id'),
					'email' => Input::post('email'),
					'first_name' => Input::post('first_name'),
					'last_name' => Input::post('last_name'),
					'company' => Input::post('company'),
				));

				if ($list_member and $list_member->save())
				{
					Session::set_flash('success', 'Added list_member #'.$list_member->id.'.');

					Response::redirect('list/members');
				}

				else
				{
					Session::set_flash('error', 'Could not save list_member.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "List_Members";
		$this->template->content = View::forge('list\members/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('List_Members');

		$list_member = Model_List_Member::find($id);

		$val = Model_List_Member::validate('edit');

		if ($val->run())
		{
			$list_member->member_id = Input::post('member_id');
			$list_member->list_id = Input::post('list_id');
			$list_member->email = Input::post('email');
			$list_member->first_name = Input::post('first_name');
			$list_member->last_name = Input::post('last_name');
			$list_member->company = Input::post('company');

			if ($list_member->save())
			{
				Session::set_flash('success', 'Updated list_member #' . $id);

				Response::redirect('list/members');
			}

			else
			{
				Session::set_flash('error', 'Could not update list_member #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$list_member->member_id = $val->validated('member_id');
				$list_member->list_id = $val->validated('list_id');
				$list_member->email = $val->validated('email');
				$list_member->first_name = $val->validated('first_name');
				$list_member->last_name = $val->validated('last_name');
				$list_member->company = $val->validated('company');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('list_member', $list_member, false);
		}

		$this->template->title = "List_members";
		$this->template->content = View::forge('list\members/edit');

	}

	public function action_delete($id = null)
	{
		if ($list_member = Model_List_Member::find($id))
		{
			$list_member->delete();

			Session::set_flash('success', 'Deleted list_member #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete list_member #'.$id);
		}

		Response::redirect('list/members');

	}


}