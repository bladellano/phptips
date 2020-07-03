<?php


namespace Source\Support;


use Source\Models\CreditCard;

/**
 * Class Payment
 * @package Source\Support
 */
class Payment
{
    /**
     * @var string
     */
    private $apiUrl;
    /**
     * @var string
     */
    private $apiKey;
    /**
     * @var
     */
    private $endPoint;
    /**
     * @var
     */
    private $build;
    /**
     * @var
     */
    private $callback;

    /**
     * Payment constructor.
     */
    public function __construct()
    {
        $this->apiUrl = "https://api.pagar.me/1";
        $this->apiKey = PAGARME_API_KEY;
    }

    /**
     * @param string $holder_name
     * @param string $card_number
     * @param string $expiration_date
     * @param int $cvv
     * @return $this
     */
    public function createCard(string $holder_name, string $card_number, string $expiration_date, int $cvv):Payment
    {
        $this->endPoint = "/cards";
        $this->build = [
            "holder_name"=>$holder_name,
            "number"=>$card_number,
            "expiration_date"=>$expiration_date,
            "cvv"=>$cvv,
        ];
        $this->post();
        return $this;
    }

    /**
     * @param int $orderId
     * @param CreditCard $card
     * @param string $amount
     * @param int $installments
     * @return $this
     */
    public function withCard(int $orderId, CreditCard $card, string $amount, int $installments):Payment
    {
        $this->endPoint = "/transactions";
        $this->build = [
            "payment_type"=>"credit_card",
            "amount"=>($amount * 100),
            "installments"=>$installments,
            "card_id"=>$card->hash,
            "metadata"=>[
                "orderId"=>$orderId
            ],
            'billing' => [
                'name' => 'Nome do pagador',
                'address' => [
                    'country' => 'br',
                    'street' => 'Avenida Brigadeiro Faria Lima',
                    'street_number' => '1811',
                    'state' => 'sp',
                    'city' => 'Sao Paulo',
                    'neighborhood' => 'Jardim Paulistano',
                    'zipcode' => '01451001'
                ]
            ],
            'items' => [
                [
                    'id' => '1',
                    'title' => 'R2D2',
                    'unit_price' => 300,
                    'quantity' => 1,
                    'tangible' => 'true'
                ]
            ],
            'customer' => [
                'external_id' => '0001',
                'name' => 'Aardvark Silva',
                'email' => 'aardvark.silva@pagar.me',
                'type' => 'individual',
                'country' => 'br',
                'documents' => [
                    [
                        'type' => 'cpf',
                        'number' => '67415765095'
                    ]
                ],
                'phone_numbers' => [ '+551199999999' ]
            ]

        ];
        $this->post();
        return $this;
    }

    /**
     * @return mixed
     */
    public function callback()
    {
        return $this->callback;
    }

    /**
     *Envia requisição para api Pagarme
     */
    private function post()
    {
        $url = $this->apiUrl.$this->endPoint;
        $api = ["api_key"=>$this->apiKey];

        $ch = curl_init($url);
        curl_setopt($ch,CURLOPT_POST,true);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(array_merge($this->build,$api)));
        curl_setopt($ch,CURLOPT_HEADER,[]);

        $this->callback = json_decode(curl_exec($ch));

        curl_close($ch);
    }
}