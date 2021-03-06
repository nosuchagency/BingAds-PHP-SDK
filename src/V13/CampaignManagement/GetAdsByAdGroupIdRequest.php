<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the ads within an ad group.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getadsbyadgroupid?view=bingads-13 GetAdsByAdGroupId Request Object
     * 
     * @uses AdType
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
    final class GetAdsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group to retrieve the ads from.
         * @var integer
         */
        public $AdGroupId;

        /**
         * One or more ad types to retrieve.
         * @var AdType[]
         */
        public $AdTypes;
    }
}
