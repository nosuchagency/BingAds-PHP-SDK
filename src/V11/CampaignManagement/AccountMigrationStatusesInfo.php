<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that contains migration status for an account.
     * @link http://msdn.microsoft.com/en-us/library/mt706124(v=msads.110).aspx AccountMigrationStatusesInfo Data Object
     * 
     * @uses MigrationStatusInfo
     * @used-by GetAccountMigrationStatusesResponse
     */
    final class AccountMigrationStatusesInfo
    {
        /**
         * The Bing Ads identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of migration status info for the corresponding account.
         * @var MigrationStatusInfo[]
         */
        public $MigrationStatusInfo;
    }

}
