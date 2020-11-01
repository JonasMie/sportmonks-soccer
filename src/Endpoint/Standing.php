<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Standing
 * @package Sportmonks\Soccer\Endpoint
 */
class Standing extends SoccerClient
{
    /**
     * @param int $seasonId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBySeasonId(int $seasonId)
    {
        $url = "standings/season/{$seasonId}";
        return $this->call($url);
    }

    /**
     * @param int $seasonId
     * @param int|null $groupId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getLiveStandingsBySeasonId(int $seasonId, int $groupId = null)
    {
        $url = "standings/season/live/{$seasonId}";
        if (isset($groupId)){
            $this->setGroupId($groupId);
        }
        return $this->call($url);
    }
}
