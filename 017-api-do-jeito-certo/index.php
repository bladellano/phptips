<?php

echo '<pre>';

require __DIR__."/vendor/autoload.php";

$client = (new \Source\Models\User())->findById(1);

$pagarme = new PagarMe\Client(PAGARME_API_KEY);

$newCard = false;
if($newCard){
    $getCreditCard = $pagarme->cards()->create([
        'holder_name' => 'Caio Dellano',
        'number' => '5452725515477606',
        'expiration_date' => '1121',
        'cvv' => '360'
    ]);

    if(!$getCreditCard->valid){
        echo '<h3>Cartão inválido!</h3>';
    } else {
        echo '<h3>Cartão válido!</h3>';
        $createCreditCard = new \Source\Models\CreditCard();
        $createCreditCard->user = $client->id;
        $createCreditCard->hash = $getCreditCard->id;
        $createCreditCard->brand = $getCreditCard->brand;
        $createCreditCard->last_digits = $getCreditCard->last_digits;

        $createCreditCard->save();
    }

}

$newTransaction = false;
if($newTransaction){
    $creditCard = (new \Source\Models\CreditCard())->findById(1);

    try {
        $transaction = $pagarme->transactions()->create([
            "amount"=> (55.80 * 100),
            "card_id" => $creditCard->hash,
            'payment_method' => 'credit_card',
            "metadata"=>[
                "order_id"=>1555
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
                    'tangible' => true
                ],
                [
                    'id' => '2',
                    'title' => 'C-3PO',
                    'unit_price' => 700,
                    'quantity' => 1,
                    'tangible' => true
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
        ]);
        var_dump($transaction);
    } catch (\Exception $e) {
        print_r($e->getMessage());
    }
}

$pay = new \Source\Support\Payment();

$pay->createCard(
    "Robson Leite",
    "5452725515477606",
    "1121",
    "360"
);
echo '<h1>Resultado:</h1>';

var_dump($pay->callback());

if($pay->callback()->valid){
    echo "<h1>Cartão obtido:</h1>";
    //Cadastrar cartão na base.

    $pay->withCard(
        "1250",
        (new \Source\Models\CreditCard())->findById(1),
        1230.34,
        2
    );

    var_dump($pay->callback());

    if($pay->callback()->status == "paid"){
        echo "<h2>Liberado</h2>";
        //Alterar status do pedido na base.
    }
}










