# Zf2SessionStorage
A simple Zend Framework 2 method to store session data

I needed a method to store currency so that I could customise my product pricing. 
User clicks on referred currency and the currency is saved to the session variable.

Easy to use:

To set the data:

$testData = new SessionService();
$testData->setData('currency','USD');

To get the value from a stored session:

result = $testData->getDataValue('currency'); //will return: 'USD'

To get a list of all items:

resultArray = $testData->getData();

Will return:

array[
'country' => 'USA'
];


Inject this into your services where needed or add it to a view helper etc.
