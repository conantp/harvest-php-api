<?php

namespace JoliCode\Harvest\Api\Model;

class InvoicesInvoiceIdMessagesPostBodyRecipientsItem
{
    /**
     * Name of the message recipient.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Email of the message recipient.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Name of the message recipient.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the message recipient.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Email of the message recipient.
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * Email of the message recipient.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
}