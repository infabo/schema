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

/**
 * A blog post intended to provide a rolling textual coverage of an ongoing event through continuous updates.
 */
final class LiveBlogPosting extends AbstractType
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
        'articleBody' => null,
        'articleSection' => null,
        'associatedMedia' => null,
        'audience' => null,
        'audio' => null,
        'author' => null,
        'award' => null,
        'character' => null,
        'citation' => null,
        'comment' => null,
        'commentCount' => null,
        'contentLocation' => null,
        'contentRating' => null,
        'contributor' => null,
        'copyrightHolder' => null,
        'copyrightYear' => null,
        'coverageEndTime' => null,
        'coverageStartTime' => null,
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
        'learningResourceType' => null,
        'license' => null,
        'liveBlogUpdate' => null,
        'locationCreated' => null,
        'mainEntity' => null,
        'mainEntityOfPage' => null,
        'material' => null,
        'mentions' => null,
        'name' => null,
        'offers' => null,
        'pageEnd' => null,
        'pageStart' => null,
        'pagination' => null,
        'position' => null,
        'potentialAction' => null,
        'producer' => null,
        'provider' => null,
        'publication' => null,
        'publisher' => null,
        'publishingPrinciples' => null,
        'recordedAt' => null,
        'releasedEvent' => null,
        'review' => null,
        'sameAs' => null,
        'schemaVersion' => null,
        'sharedContent' => null,
        'sourceOrganization' => null,
        'spatial' => null,
        'spatialCoverage' => null,
        'speakable' => null,
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
        'wordCount' => null,
        'workExample' => null,
    ];
}
