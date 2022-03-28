<?php

namespace SocialiteProviders\SnapchatMarketingApi;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SnapchatMarketingApiExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('snapchat_marketing_api', Provider::class);
    }
}
