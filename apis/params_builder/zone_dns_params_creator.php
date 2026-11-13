<?php

class ZoneDnsParamsCreator extends ParamsCreator
{
    public function createParameters(array $args, $client, string $method): array
    {
        $args = $this->formatZoneWithIdn($args);

        return parent::createParameters($args, $client, $method);
    }

    /**
     * OpenProvider keys DNS zones and their records by punycode, so IDN names
     * must be encoded before they are sent
     *
     * @param array $args
     *
     * @return array
     */
    private function formatZoneWithIdn($args): array
    {
        if (isset($args['name'])) {
            $args['name'] = parent::idnEncode($args['name']);
        }

        if (isset($args['domain']['name'])) {
            $args['domain']['name'] = parent::idnEncode($args['domain']['name']);
        }

        if (isset($args['domain']['extension'])) {
            $args['domain']['extension'] = parent::idnEncode($args['domain']['extension']);
        }

        // Record names are relative to the zone; the empty name is the zone itself
        foreach (['add', 'remove', 'replace'] as $operation) {
            foreach ($args['records'][$operation] ?? [] as $index => $record) {
                if (!empty($record['name'])) {
                    $args['records'][$operation][$index]['name'] = parent::idnEncode($record['name']);
                }
            }
        }

        foreach ($args['records'] ?? [] as $index => $record) {
            if (is_array($record) && !empty($record['name'])) {
                $args['records'][$index]['name'] = parent::idnEncode($record['name']);
            }
        }

        return $args;
    }
}
