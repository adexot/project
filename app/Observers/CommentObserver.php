<?php

  namespace App\Observers;

  use App\Comment;
  use App\Mail\CommentAdded;
  use Illuminate\Support\Facades\Mail;

  class CommentObserver {

    // This is fired when a comment is added, the logic to mail the tickect Owner
    // Goes here
    public function created(Comment $comment)
    {
      // A comment is added, let's mail the owner
      Mail::to($comment->ticket->user->email)->queue(new CommentAdded($comment));
    }
  }
