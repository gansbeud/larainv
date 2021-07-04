<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Staffs extends Component
{
    public $staffs, $role, $name, $email, $password, $user_id;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->staffs = User::All();
        return view('livewire.staffs');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->role = '';
        $this->name = '';
        $this->email = '';
        $this->password ='';
        $this->user_id='';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'role' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
   
        User::updateOrCreate(['id' => $this->user_id], [
            'role' => $this->role,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,

        ]);
  
        session()->flash('message', 
            $this->user_id ? 'User Updated Successfully.' : 'User Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $User = User::findOrFail($id);
        $this->user_id = $User->id;
        $this->role = $User->role;
        $this->name = $User->name;
        $this->email = $User->email;
        

        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'User Deleted Successfully.');
    }
}