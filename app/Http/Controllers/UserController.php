<?php

    namespace App\Http\Controllers;

    use App\Models\Event;
    use App\Models\User;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function index()
        {
            $search = request('search');
            if ($search) {
                $user = User::where([
                    ['name', 'like', '%'.$search.'%']
                ])->get();
            } else {
                $user = User::all();
            }

            return view(
                'events.dashboard',
                ['users' => $user, 'search' => $search]
            );
        }

        public function create()
        {
            return view('auth.register');
        }

        //        public function store(Request $request) ///Rota do jetstream está sobrescrevendo
        //        {
        //            dd($request->all());
        //            $user = $request->all();
        //            User::create($user);
        //            return redirect('/dashboard')->with(
        //                'msg', 'Usuário criado com sucesso!'
        //            );
        //        }

        public function show($id)
        {
            $event = Event::findOrFail($id);
            $eventOwner = User::where('id', $event->user_id)->first()->toArray(
            );

            return view(
                'events.show', ['event' => $event, 'eventOwner' => $eventOwner]
            );
        }

        public function destroy($id)
        {
            Event::where('user_id', $id)->delete();
            User::findOrFail($id)->delete();
            return redirect('/dashboard')->with(
                'msg', 'Usuário excluído com sucesso!'
            );
        }

        public function edit($id)
        {
            $user = User::findOrFail($id);
            return view('users.edit-user', ['user' => $user]);
        }

        public function update(Request $request, User $user)
        {
            $data = $request->except('cpf', 'email', 'password');
            $user->update($data);

            return redirect('/dashboard')->with(
                'msg', 'Evento editado com sucesso!'
            );
        }
    }
