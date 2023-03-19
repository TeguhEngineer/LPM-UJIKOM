<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function index()
    {
        if (Gate::allows('admin')) {
            $messages = Message::where('id_pegawai', auth()->user()->id)->get();
            $grouped_messages = $messages->groupBy('kode_chat');
            $unique_chats = collect();
            foreach ($grouped_messages as $kode_chat => $messages) {
                $unique_chats->push($messages->first());
            }

            return view('admin.chat.index', [
                'title' => 'Chat Masuk - PPMDT',
                'header' => 'Chat Masuk',
                'messages' => $unique_chats
            ]);
        }
        return back();
    }

    public function chatView($id, $id2)
    {
        return view('admin.chat.chat', [
            'title' => 'Chat Service - PPMDT',
            'header' => 'Chat Service',
            'dataSender' => Message::where('id_user', $id)->latest()->first(),
            'chats' => Message::where('kode_chat', $id2)->get()
        ]);
    }

    public function help()
    {
        $getAdmin = User::where('role', 'admin')->get();
        return view('user.chat', [
            'title' => 'Team Support - PPMDT',
            'getAdmin' => $getAdmin
        ]);
    }

    public function chatViewMasyarakat($id, $id2)
    {
        return view('user.livechat', [
            'title' => 'Chat Administrator - PPMDT',
            'header' => 'Chat Administrator',
            'getAdmin' => User::where('id', $id)->first(),
            'data' => Message::where('id_pegawai', $id)->Where('id_user', $id2)->get(),
            'data2' => Message::where('id_pegawai', $id)->Where('id_user', $id2)->first(),
        ]);
    }

    public function chatLogic(Request $request)
    {
        $dataChat = [
            'kode_chat' => $request->kode_chat,
            'id_user' => $request->id_user,
            'id_pegawai' => $request->id_pegawai,
            'pesan' => $request->pesan,
            'role' => $request->role,
        ];
        Message::create($dataChat);
        return back();
    }
}
