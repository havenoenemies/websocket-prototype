<?php

namespace App\Http\Controllers\Auth;

use App\Events\StoreMessageEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Message\StoreRequest;
use App\Http\Resources\Message\MessageResource;
use App\Models\Message;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MessageController extends Controller
{
    public function index(): Response
    {
        $messages = Message::latest()->get();
        $messages = MessageResource::collection($messages);

        return Inertia::render('Message/Messages', compact('messages'));
    }

    public function store(StoreRequest $request): MessageResource
    {
        $data = $request->validated();

        $message = Message::create($data);

        broadcast(new StoreMessageEvent($message))->toOthers();

        return MessageResource::make($message);
    }
}
