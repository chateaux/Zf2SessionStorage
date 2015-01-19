# Zf2SessionStorage
A simple Zend Framework 2 method to store session data for your application

I needed a simple way to store Selected country so that I could customise my applications currency. 
The user selects their country from a dropsown, and I save this data to my userData session variable.

To use this is pretty simpple.

To set the data:

$testData = new SessionService();
$testData->setData('country','USA');
$testData->setData('schema','1');
$testData->setData('other','49');

To get the value of a stored item:

result = $testData->getDataValue('country'); //will return: 'USA'

To get a list of all items:

resultArray = $testData->getData();

Will return:

array[
'country' => 'USA',
'schema'  => '1',
'other'   => '49'
];


Inject this into your services where needed or add it to a view helper etc.
