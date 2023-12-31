<?php

namespace Admingate\ACL\Services;

use Admingate\ACL\Models\User;
use Admingate\ACL\Repositories\Interfaces\ActivationInterface;

class ActivateUserService
{
    protected ActivationInterface $activationRepository;

    public function __construct(ActivationInterface $activationRepository)
    {
        $this->activationRepository = $activationRepository;
    }

    public function activate(User $user): bool
    {
        if ($this->activationRepository->completed($user)) {
            return false;
        }

        event('acl.activating', $user);

        $activation = $this->activationRepository->createUser($user);

        event('acl.activated', [$user, $activation]);

        return $this->activationRepository->complete($user, $activation->code);
    }
}
