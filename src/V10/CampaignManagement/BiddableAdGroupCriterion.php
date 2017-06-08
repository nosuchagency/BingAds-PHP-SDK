<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a biddable criterion that you want applied to the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj689538(v=msads.100).aspx BiddableAdGroupCriterion Data Object
     * 
     * @uses CriterionBid
     * @uses AdGroupCriterionEditorialStatus
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class BiddableAdGroupCriterion extends AdGroupCriterion
    {
        /**
         * The bid to use in the auction.
         * @var CriterionBid
         */
        public $CriterionBid;

        /**
         * The URL of the webpage that the user is taken to when they click the ad.
         * @var string
         */
        public $DestinationUrl;

        /**
         * The criterion's editorial review status.
         * @var AdGroupCriterionEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Tracking templates are where you can specify URL tracking parameters that are used in tandem with your final URL or landing page.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
