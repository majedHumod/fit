<?php


namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersManager extends Component
{
    public $users, $name, $email, $user_id;

    // عرض جميع المستخدمين
    public function render()
    {
        $this->users = User::all();
        return view('livewire.users-manager');
    }

    // إضافة مستخدم جديد
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->name,
        ]);

        $this->reset(['name', 'email']);
        session()->flash('message', 'تم إضافة المستخدم بنجاح');
    }

    // حذف مستخدم
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'تم حذف المستخدم بنجاح');
    }
}
