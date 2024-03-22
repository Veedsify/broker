<?php

namespace App\Mail;

use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApprovedDeposit extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;
    public TransactionHistory $transactionHistory;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, TransactionHistory $transactionHistory)
    {
        $this->user = $user;
        $this->transactionHistory = $transactionHistory;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Deposit Has Been Received ' . $this->user->name,
            from: 'admin@' . config('app.url'),
            to: $this->user->email,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.depositapproved',
            with: [
                'user' => $this->user,
                'transactionHistory' => $this->transactionHistory,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
