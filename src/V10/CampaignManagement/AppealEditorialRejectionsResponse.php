<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.100).aspx AppealEditorialRejections Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
     */
    final class AppealEditorialRejectionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any appeals that were not successfully submitted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
