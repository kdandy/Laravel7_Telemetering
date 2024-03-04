<?php
namespace App\Repositories;
use App\Models\User;

class UserRepository
{
   public function getPaginate($request)
   {
      $base = new User;
      return $base->get();
   }
   public function created($request)
   {
      $user = new User;
      $user->username = $request->username;
      $user->password = $request->password;
      $user->save();
      return $user;
   }
   public function updated($request, $id)
   {
      $user = User::find($id);
      $user->username = isset($request->username) ? $request->username: $user->username;
      $user->password = isset($request->password) ? $request->password: $user->password;
      $user->save();
      return $user;
   }
   public function getById($id)
   {
      $user = User::find($id);
      return $user;
   }
   public function deleted($id):void
   {
      $user = User::find($id);
      $user->delete();
   }
}
