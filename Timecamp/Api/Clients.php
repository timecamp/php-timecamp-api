<?php
namespace Timecamp\Api;

/**
 * Class Clients
 * @link https://github.com/timecamp/timecamp-api/blob/master/sections/clients.md
 * @package Timecamp\Api
 */
class Clients extends AbstractApi
{

    /**
     * Return all clients.
     *
     * @return array
     */
    public function all()
    {
        return $this->request('GET', 'client/');
    }

    /**
     * Modify current client
     *
     * Example: https://www.timecamp.com/third_party/api/client/api_token/a36cabi96bba83f826
     *
     * Post Variable Array Fields:
     *
     * clientId: 1234 (required)
     * firstName: "Kamil" (optional)
     * lastName: "Rudnicki" (optional)
     * organizationName: "Time Solutions Sp. z o.o." (optional)
     * address: "Kosciuszki 33/4, NIP: 8943003832" (optional)
     * email: "k.rudnicki2@timecamp.com" (optional)
     * currencyId: 1 (optional, all available IDs can be found here: GET https://www.timecamp.com/third_party/api/currency/format/json/api_token/a36cabi96bba83f826)
     *
     * @param $params
     * @return array
     */
    public function update($params)
    {
        return $this->request('POST', 'client/', $params);
    }

    /**
     * Add new client.
     *
     * Example: https://www.timecamp.com/third_party/api/client/api_token/a36cabi96bba83f826
     *
     * Post Variable Array Fields:
     *
     * organizationName: "Time Solutions Sp. z o.o." (required)
     * firstName: "Kamil" (optional)
     * lastName: "Rudnicki" (optional)
     * address: "Kosciuszki 33/4, NIP: 8943003832" (optional)
     * email: "k.rudnicki2@timecamp.com" (optional)
     * currencyId: 1 (optional, all available IDs can be found here: GET https://www.timecamp.com/third_party/api/currency/format/json/api_token/a36cabi96bba83f826)
     *
     * @param $params
     * @return array
     */
    public function add($params)
    {
        return $this->request('PUT', 'client/', $params);
    }

}

?>