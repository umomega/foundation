<?php

namespace Umomega\Foundation\Notifications\Messages;

use Illuminate\Notifications\Messages\MailMessage as BaseMailMessage;

class MailMessage extends BaseMailMessage
{
    /**
     * The Markdown template to render (if applicable).
     *
     * @var string|null
     */
    public $markdown = 'foundation::mail.layout';
}
