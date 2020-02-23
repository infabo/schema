<?php
declare(strict_types=1);

namespace Brotkrueml\Schema\Model\Type;

/*
 * This file is part of the "schema" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

use Brotkrueml\Schema\Core\Model\AbstractType;
use Brotkrueml\Schema\Core\Model\WebPageTypeInterface;

/**
 * A QAPage is a WebPage focussed on a specific Question and its Answer(s), e.g. in a question answering site or documenting Frequently Asked Questions (FAQs).
 */
final class QAPage extends AbstractType implements WebPageTypeInterface
{
    protected $properties = [
        'about' => null,
        'accessMode' => null,
        'accessModeSufficient' => null,
        'accessibilityAPI' => null,
        'accessibilityControl' => null,
        'accessibilityFeature' => null,
        'accessibilityHazard' => null,
        'accessibilitySummary' => null,
        'accountablePerson' => null,
        'additionalType' => null,
        'aggregateRating' => null,
        'alternateName' => null,
        'alternativeHeadline' => null,
        'associatedMedia' => null,
        'audience' => null,
        'audio' => null,
        'author' => null,
        'award' => null,
        'breadcrumb' => null,
        'character' => null,
        'citation' => null,
        'comment' => null,
        'commentCount' => null,
        'contentLocation' => null,
        'contentRating' => null,
        'contributor' => null,
        'copyrightHolder' => null,
        'copyrightYear' => null,
        'creator' => null,
        'dateCreated' => null,
        'dateModified' => null,
        'datePublished' => null,
        'description' => null,
        'disambiguatingDescription' => null,
        'discussionUrl' => null,
        'editor' => null,
        'educationalAlignment' => null,
        'educationalUse' => null,
        'encoding' => null,
        'encodingFormat' => null,
        'exampleOfWork' => null,
        'expires' => null,
        'funder' => null,
        'genre' => null,
        'hasPart' => null,
        'headline' => null,
        'identifier' => null,
        'image' => null,
        'inLanguage' => null,
        'interactionStatistic' => null,
        'interactivityType' => null,
        'isAccessibleForFree' => null,
        'isBasedOn' => null,
        'isFamilyFriendly' => null,
        'isPartOf' => null,
        'keywords' => null,
        'lastReviewed' => null,
        'learningResourceType' => null,
        'license' => null,
        'locationCreated' => null,
        'mainContentOfPage' => null,
        'mainEntity' => null,
        'mainEntityOfPage' => null,
        'material' => null,
        'mentions' => null,
        'name' => null,
        'offers' => null,
        'position' => null,
        'potentialAction' => null,
        'primaryImageOfPage' => null,
        'producer' => null,
        'provider' => null,
        'publication' => null,
        'publisher' => null,
        'publishingPrinciples' => null,
        'recordedAt' => null,
        'relatedLink' => null,
        'releasedEvent' => null,
        'review' => null,
        'reviewedBy' => null,
        'sameAs' => null,
        'schemaVersion' => null,
        'significantLink' => null,
        'sourceOrganization' => null,
        'spatial' => null,
        'spatialCoverage' => null,
        'speakable' => null,
        'specialty' => null,
        'sponsor' => null,
        'subjectOf' => null,
        'temporal' => null,
        'temporalCoverage' => null,
        'text' => null,
        'thumbnailUrl' => null,
        'timeRequired' => null,
        'translator' => null,
        'typicalAgeRange' => null,
        'url' => null,
        'version' => null,
        'video' => null,
        'workExample' => null,
    ];
}
