<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\StoreEventRequest;
    use App\Models\Event;
    use App\Models\User;
    use Illuminate\Http\Request;

    class EventController extends Controller
    {
        public function index()
        {
            $search = request('search');
            if($search)
            {
                $event = Event::where([
                    ['title', 'like', '%'.$search.'%']
                ])->get();
            }
            else{
                $event = Event::all();
            }
//            dd($event[0]->date, date('d/m/Y', strtotime($event[0]->date)));

            return view(
                'welcome',
                ['events' => $event, 'search' => $search]
            );
        }

        public function create()
        {
            return view('events.create');
        }

        public function store(StoreEventRequest $request)
        {
                    $event = new Event;
//            $data = $request->all();
                    $event->title = $request->title;
                    $event->city = $request->city;
                    $event->private = $request->private;
                    $event->description = $request->description;
                    $event->items = $request->items;
            $user = auth()->user();
            $event->user_id = $user->id;
                    $event->date = $request->date;
                    $event->save();

//            $data->user_id = $user->id;

//            Event::create($data);

            //
            //        $event->save();

            return redirect('/events ')->with('msg', 'Evento criado com sucesso!');
        }

        public function show($id)
        {

            $event = Event::findOrFail($id);
            $eventOwner = User::where('id', $event->user_id)->first()->toArray();

            return view('events.show', ['event' => $event,'eventOwner' => $eventOwner]);
        }

        public function dashboard()
        {
            $search = request('search');
            if($search)
            {
                $user = User::where([
                    ['name', 'like', '%'.$search.'%']
                ])->get();
            }
            else{
                $user = User::all();
            }
            //            dd($event[0]->date, date('d/m/Y', strtotime($event[0]->date)));

            return view(
                'events.dashboard',
                ['users' => $user, 'search' => $search]
            );



//            $user = auth()->user();
//            $events = $user->events;
//
//            return view('events.dashboard', ['events' => $events]);
        }
        public function destroy($id)
        {
            Event::findOrFail($id)->delete();
            return redirect('/events')->with('msg', 'Evento excluído com sucesso!');
        }

        public function edit($id)
        {
            $event = Event::findOrFail($id);

            return view('events.edit', ['event' => $event]);
        }

        public function update(Request $request)
        {
            Event::findOrFail($request->id)->update($request->all());
            return redirect('/events')->with('msg', 'Evento editado com sucesso!');
        }
    }
