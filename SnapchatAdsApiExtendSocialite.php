<?php

namespace SocialiteProviders\SnapchatAdsApi;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SnapchatAdsApiExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('snapchat_ads_api', Provider::class);
    }
}
