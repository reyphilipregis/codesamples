<?php
declare(strict_types=1);

namespace App\Database\Schema;

use Doctrine\ORM\Mapping as ORM;

/**
 * @method null|string getAccountId()
 * @method null|string getAccountNumber()
 * @method null|string getSubscriptionType()
 * @method self setAccountNumber(string $accountNumber)
 * @method self setSubscriptionType(string $subscriptionType)
 */
trait AccountSchema
{
    /**
     * @ORM\Column(type="guid", name="id")
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Id()
     *
     * @var string
     */
    protected $accountId;

    /**
     * @ORM\Column(type="string", name="account_number")
     *
     * @var string
     */
    protected $accountNumber;

    /**
     * @ORM\Column(type="string", name="subscription_type")
     *
     * @var string
     */
    protected $subscriptionType;
}
