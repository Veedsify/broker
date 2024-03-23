<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\TransactionHistory;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

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
            from: new Address('admin' . '@' . config('app.name') . '.net', 'CryptoTradersPro'),
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
