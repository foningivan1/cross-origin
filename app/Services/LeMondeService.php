<?php



namespace App\Services;

use GuzzleHttp\Client;

class LeMondeService
{
    protected $client;
    protected $baseUrl = 'https://api-catch-the-dev.unit41.fr/lemonde';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getArticles($date = null)
    {
        $auth = ['tev001', 'tev001'];

        $params = [];
        if ($date) {
            $params['date'] = $date;
        }

        try {
            $response = $this->client->request('GET', $this->baseUrl, [
                'auth' => $auth,
                'query' => $params
            ]);

            // Décoder la réponse JSON et renvoyer les articles
            $data = json_decode($response->getBody()->getContents(), true);

            return $data['data'] ?? [];
        } catch (\Exception $e) {
            // Si erreur, retour d'un message d'erreur
            return ['error' => 'Erreur lors de la récupération des articles : ' . $e->getMessage()];
        }
    }
//     public function getArticles($date)
// {
//     $client = new Client([
//         'base_uri' => 'https://api-catch-the-dev.unit41.fr/',
//         'verify' => false, //
//     ]);

//     $response = $client->get("lemonde?date=$date");

//     return json_decode($response->getBody()->getContents(), true);
// }
}
