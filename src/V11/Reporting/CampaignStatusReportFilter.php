<?php
// Generated on 6/7/2017 5:55:19 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the campaign status values that you can use to filter the report data.
     * @link http://msdn.microsoft.com/en-us/library/bb672004(v=msads.110).aspx CampaignStatusReportFilter Value Set
     * 
     * @used-by AdExtensionByAdReportFilter
     * @used-by AdExtensionByKeywordReportFilter
     * @used-by AdExtensionDetailReportFilter
     * @used-by AdGroupPerformanceReportFilter
     * @used-by AdPerformanceReportFilter
     * @used-by AgeGenderDemographicReportFilter
     * @used-by AudiencePerformanceReportFilter
     * @used-by CallDetailReportFilter
     * @used-by CampaignPerformanceReportFilter
     * @used-by ConversionPerformanceReportFilter
     * @used-by DestinationUrlPerformanceReportFilter
     * @used-by DSAAutoTargetPerformanceReportFilter
     * @used-by DSACategoryPerformanceReportFilter
     * @used-by DSASearchQueryPerformanceReportFilter
     * @used-by GeographicPerformanceReportFilter
     * @used-by GoalsAndFunnelsReportFilter
     * @used-by KeywordPerformanceReportFilter
     * @used-by NegativeKeywordConflictReportFilter
     * @used-by ProductDimensionPerformanceReportFilter
     * @used-by ProductPartitionPerformanceReportFilter
     * @used-by ProductPartitionUnitPerformanceReportFilter
     * @used-by ProductSearchQueryPerformanceReportFilter
     * @used-by PublisherUsagePerformanceReportFilter
     * @used-by SearchQueryPerformanceReportFilter
     * @used-by ShareOfVoiceReportFilter
     */
    final class CampaignStatusReportFilter
    {
        /** The report will contain campaigns that are active. */
        const Active = 'Active';

        /** The report will contain campaigns that have been canceled. */
        const Cancelled = 'Cancelled';

        /** The report will contain campaigns that have been deleted. */
        const Deleted = 'Deleted';

        /** The report will contain campaigns that are paused. */
        const Paused = 'Paused';

        /** The report will contain campaigns that are paused due to budget restrictions. */
        const BudgetPaused = 'BudgetPaused';

        /** The report will contain campaigns that have been suspended. */
        const Suspended = 'Suspended';
    }

}
