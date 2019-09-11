<?php

namespace AS2;

use models\Message;

interface StorageInterface
{
    /**
     * @param array $data
     * @return MessageInterface
     */
    public function initMessage($data = []);

    /**
     * @param string $id
     * @return MessageInterface
     */
    public function getMessage($id);

    /**
     * @param Message $message
     * @return bool
     */
    public function saveMessage(Message $message);

    /**
     * @param array $data
     * @return PartnerInterface
     */
    public function initPartner($data = []);

    /**
     * @param string $id
     * @return PartnerInterface
     */
    public function getPartner($id);

    /**
     * @param PartnerInterface $partner
     * @return bool
     */
    public function savePartner(PartnerInterface $partner);
}
