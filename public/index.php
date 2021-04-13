<?php

/**
 * Links:
 * https://tproger.ru/translations/design-patterns-simple-words-1/
 */

namespace DesignPatterns;

require_once '../vendor/autoload.php';

use App\Creational\Simplefactory\PassFactory;

use App\Creational\Fabricmethod\SCV;
use App\Creational\Fabricmethod\Marine;

use App\Creational\Abstractfactory\YogaFactory;
use App\Creational\Abstractfactory\KarateFactory;

use App\Creational\Builder\PolynomBuilder;

use App\Creational\Prototype\User;

use App\Creational\Singleton\Math;

use App\Structural\Adapter\Keithley2182;
use App\Structural\Adapter\Keithley2000;
use App\Structural\Adapter\Ampermeter;
use App\Structural\Adapter\AmpermeterAdapter;
use App\Structural\Adapter\Measure;

use App\Structural\Bridge\Red;
use App\Structural\Bridge\Blue;
use App\Structural\Bridge\Rectangle;
use App\Structural\Bridge\Triangle;

use App\Structural\Composite\SCV as CSCV;
use App\Structural\Composite\Marine as CMarine;
use App\Structural\Composite\Tank;
use App\Structural\Composite\Team;
use App\Structural\Composite\TaskManager;

use App\Structural\Decorator\OhmMeter;
use App\Structural\Decorator\AdvanceOhmMeter;

use App\Structural\Facade\WireCalculator;
use App\Structural\Facade\WireCalculatorFacade;

use App\Structural\Flyweight\CreditMaker;
use App\Structural\Flyweight\CreditMarket;

use App\Structural\Proxy\LicenseServer;
use App\Structural\Proxy\SecureLicenseServer;

use App\Behavioral\Chain\Galon;
use App\Behavioral\Chain\Pail;
use App\Behavioral\Chain\Canister;

use App\Behavioral\Command\Mail;
use App\Behavioral\Command\ReceiveMail;
use App\Behavioral\Command\SendMail;
use App\Behavioral\Command\MailClient;

use App\Behavioral\Mediator\Chart;
use App\Behavioral\Mediator\User as ChartUser;

use App\Behavioral\Memento\Random;

use App\Behavioral\Observer\SupportWorker;
use App\Behavioral\Observer\QuestionPostings;
use App\Behavioral\Observer\QuestionPost;

use App\Behavioral\Visitor\Gun;
use App\Behavioral\Visitor\Rifle;
use  App\Behavioral\Visitor\MachineGun;
use App\Behavioral\Visitor\Caliber;
use App\Behavioral\Visitor\Weight;

use App\Behavioral\Strategy\Hash1;
use App\Behavioral\Strategy\Hash2;
use App\Behavioral\Strategy\HashCreator;

use App\Behavioral\State\Regular;
use App\Behavioral\State\Upper;
use App\Behavioral\State\Lower;
use App\Behavioral\State\TextCreator;

use App\Behavioral\Templatemethod\UG1;
use App\Behavioral\Templatemethod\UG2;

echo '<h1>Design Patterns</h1>';

echo '<h2>Creational</h2>';
echo '<hr>';

/**
 * This code demonstrate the Simple Factory pattern.
 * This pattern give instance for creating other object.
 * The Simple Factory method is equal '= new Object()'. Profit of this will be if use some object many times in different
 * code path. If we need change realization we have to change '= new Object()' in all cases where we use this object,
 * but if we use Simple Factory we ned to do changes only in Factory method which give us needed object
 *
 * We use Factory 'PassFactory' which return new object with interface type 'IPass'.
 * We can change code in the Pass instance and we don't need any changes in our clients code.
 */
echo '<h3>Simple Factory</h3>';

// Password example
$pass = '12345678';

// Create an object of Pass instance using Factory
$passWorker = PassFactory::makePass();
$hash = $passWorker->createHash($pass);
$checkedPass = $passWorker->checkPass($pass, $hash);

// Show results
echo "<div><b>Password: </b>$pass</div>";
echo "<div><b>Hash: </b>$hash</div>";
echo "<div><b>Check: </b>$checkedPass</div>";

/**
 * This code demonstrate the Fabric Method pattern.
 * This pattern give the interface for child classes to create instance of some class
 *
 * We use abstract Class 'Unit' as Fabric Method. The Fabric method is abstract method 'makeUnit'.
 * Child of Unit must realize 'makeUnit' method. In this realization we create concrete realization for interface 'IUnit'
 */
echo '<h3>Fabric Method</h3>';

// Create worker
$scv = new SCV();

echo '<div><b>SCV action: </b>';
$scv->myAction();
echo '</div>';

// Create fighter
$marine = new Marine();

echo '<div><b>Marine action: </b>';
$marine->myAction();
echo '</div>';

/**
 * This code demonstrate the Abstract Factory pattern.
 * Abstract Factory give the interface for interconnected or interdependent instances (objects)
 * not specifying their specific classes.
 * We have to create Factory interface. This interface contains methods for create interconnected or interdependent
 * interfaces. Then we create several Factories which implement Factory interface. Each Factory has methods for create
 * concrete interconnected or interdependent objects.
 *
 * We use interface 'ISportFactory'. It is an abstraction for factories: 'YogaFactory' and 'KarateFactory'.
 * ISportFactory methods return interfaces, but 'YogaFactory' or 'KarateFactory' methods return concrete realization:
 * 'Yoga' and 'YogaMaster' or 'Karate' and 'KarateMaster'.
 *
 * We have to use this pattern when we have interconnected relationship with complex logic
 */
echo '<h3>Abstract Factory</h3>';

// Create Yoga sport
$yogaFactory = new YogaFactory();
$sport = ($yogaFactory->makeSport())->getSportName();
$master = ($yogaFactory->makeMaster())->getMaster();

echo "<div>
        <div><b>Sport: </b>$sport</div>
        <div><b>Master: </b>$master</div>
      </div>";

// Create Karate sport
$karateFactory = new KarateFactory();
$sport = ($karateFactory->makeSport())->getSportName();
$master = ($karateFactory->makeMaster())->getMaster();

echo "<div>
        <div><b>Sport: </b>$sport</div>
        <div><b>Master: </b>$master</div>
      </div>";

/**
 * This code demonstrate Builder pattern.
 * This pattern provides a way to create a composite object (anti-telescopial constructor).
 * This pattern useful than we have composite object with many existing or no existing parameters
 *
 * We use method for polynom calculation. We can use first, second, third or higher order for calculate. The class
 * 'Polynom' has method for calculation and constructor for set polynomial coefficients. The class 'PolynomBuilder' -
 * it is a Builder. It create an object of 'Polynom' and set all needed parameters.
 */
echo '<h3>Builder</h3>';

// Calculate polynom first order
$polynom = (new PolynomBuilder(1.5))->setA0(1)
                                        ->setA1(1)
                                        ->build();
echo '<div><b>Polynom of first order: </b>' . $polynom->result() . '</div>';

// Calculate polynom second order
$polynom = (new PolynomBuilder(1.5))->setA0(1)
                                        ->setA1(1)
                                        ->setA2(2)
                                        ->build();
echo '<div><b>Polynom of second order: </b>' . $polynom->result() . '</div>';

// Calculate polynom third order
$polynom = (new PolynomBuilder(1.5))->setA0(1)
                                        ->setA1(1)
                                        ->setA2(2)
                                        ->setA3(4.5)
                                        ->build();
echo '<div><b>Polynom of second order: </b>' . $polynom->result() . '</div>';

/**
 * This code demonstrate Prototype pattern.
 * This pattern create new object based on existing object by cloning. At cloning some properties can be changed.
 * This pattern used then cloning is simpler than creating
 *
 * We create class 'User'. This class has magic method '__clone()'. This is a way to change properties at cloning.
 * Also we create methods for change properties.
 */
echo '<h3>Prototype</h3>';

// Create object
$user = new User(1, 'Urii');
echo '<div><b>Number: </b>' . $user->getNumber() . '; <b>Name: </b>' . $user->getName() . '</div>';

// Cloning existing object
$user2 = clone $user;
echo '<div><b>Number: </b>' . $user2->getNumber() . '; <b>Name: </b>' . $user2->getName() . '</div>';

/**
 * This code demonstrate Singleton pattern.
 * This pattern guaranties than in single processing application will be only one instance of some class and provides
 * global access point to this instance.
 *
 * We create class 'Math'. We cannot create object of this class because it has private constructor, we cannot clone
 * object because it has private __clone() method. To create an object we can only use static method 'getInstance()'.
 * This method create self instance if it not exist, or return existing self instance.
 */
echo '<h3>Singleton</h3>';

$math = Math::getInstance();
echo '<div> 4 + 5 = ' . $math->sumAB(4, 5) . '</div>';

echo '<hr></br></br></br>';


echo '<h2>Structural</h2>';
echo '<hr>';

/**
 * This code demonstrate Adapter pattern.
 * This pattern use wrapper to provide compatibilities for some outstanding object and other typical objects
 *
 * We carry out measurements and use class 'Measure'. This class use measure method 'getResult'.
 * Method 'getResult' accept as parameter the interface 'IVoltmeter'. But, we want to use 'Amperemeter'
 * in our measurements and dont want change our basic code. We can't use 'Amperemeter' directly because
 * it don't implement the interface 'IVoltmeter'. We have to use 'AmperemeterAdapter' for compatibilities.
 * AmperemeterAdapter implement the interface 'IVoltmeter' and in this realization in the method 'getVoltage'
 * it execute method 'getCurrent' of 'Amperemeter' class.
 */
echo '<h3>Adapter</h3>';

// Create voltmeters (Used normal)
$keithley2182 = new Keithley2182();
$keithley2000 = new Keithley2000();

// Create amperemeter (Not realized interface IVoltmeter, but we want use it)
$amperemeter = new Ampermeter();

// Create Adapter (Give us possibilities to use amperemeter like voltmeter in our measurements)
$adapter = new AmpermeterAdapter($amperemeter);

// Measure (Use standard voltmeters and ampertmeter via adapter)
$measure = new Measure();

echo '<div><b>Voltage: </b>' . $measure->getResult($keithley2000) . '</div>';
echo '<div><b>Voltage: </b>' . $measure->getResult($keithley2182) . '</div>';
echo '<div><b>Current: </b>' . $measure->getResult($adapter) . '</div>';

/**
 * This code demonstrate Bridge pattern.
 * The bridge pattern is a preference for composition over inheritance. We have several hierarchy of object.
 * And we can transfer implementation of details from one hierarchy to another.
 *
 * We have one hierarchy - Color. It has interface 'IColor' and several realizations: 'Red', 'Blue', etc...
 * We have another hierarchy - Shape. It has interface 'IShape' and several realizations: 'Rectangle', 'Triangle', etc...
 * The interface 'IShape has magic method __construct()'. This method gets as parameter interface 'IColor'. It's give us
 * apply some color realization at shape object created
 */
echo '<h3>Bridge</h3>';

// Create colors
$red = new Red();
$blue = new Blue();

// Create shapes with color 'red' (we set object color as parameter)
$rectangleRed = new Rectangle($red);
$triangleRed = new Triangle($red);

echo '<div>' . $rectangleRed->getShape() . '</div>';
echo '<div>' . $triangleRed->getShape() . '</div>';

// Create shapes with color 'blue'
$rectangleRed = new Rectangle($blue);
$triangleRed = new Triangle($blue);

echo '<div>' . $rectangleRed->getShape() . '</div>';
echo '<div>' . $triangleRed->getShape() . '</div>';

/**
 * This code demonstrate Composite pattern.
 * The pattern combine objects into a tree structure. It give possibilities to work with individual objects in
 * single style.
 *
 * We have several types of units. Each type of Units have defined actions. We have 'TaskManager' for apply action.
 * TaskManager gets as parameter Composite of objects (units array). We create composite 'Team'. 'Team' gets as parameter
 * units array, and has methods to add and remove units. Composite 'Team' give as possibilities use composite in
 * 'TaskManager' like single unit.
 */
echo '<h3>Composite</h3>';

// Create Units
$scv1 = new CSCV('scv1');
$scv2 = new CSCV('scv2');

$marine1 = new CMarine('marine1');
$marine2 = new CMarine('marine2');

$tank = new Tank('tank1');

// Create team
$team = new Team([new CSCV('scv3'), new CMarine('marine3'), new Tank('tank2')]);

// Create Action manager. Task manager gets array of units. This array it is a composite: separated units and team of units
// If in composite only one unit SCV
$taskManager = new TaskManager([$scv1]);
echo '<div>' . $taskManager->performAction('walk') . '</div>';
echo '<div>' . $taskManager->performAction('fight') . '</div>';
echo '</br>';

// Fired $scv1 (it must be free for next actions)
$scv1->abolishAction();

// Add Marine to composite
$taskManager = new TaskManager([$scv1, $marine1]);
echo '<div>' . $taskManager->performAction('walk') . '</div>';
echo '<div>' . $taskManager->performAction('fight') . '</div>';
echo '</br>';

// Add to Task Manager '$team'. $scv1 and $marine1 cant perform the tasks because they are hired in previous tasks
// But we have '$team'.
$taskManager = new TaskManager([$scv1, $marine1, $team]);
echo '<div>' . $taskManager->performAction('walk') . '</div>';
echo '<div>' . $taskManager->performAction('fight') . '</div>';
echo '<div>' . $taskManager->performAction('drop') . '</div>';

/**
 * This code demonstrate Decorator pattern.
 * This pattern give us possibilities dynamically change behaviour of object.
 *
 * We have standard 'OhmMeter'. It measure resistance. And we create 'AdvanceOhmMeter'. It measure resistance and
 * calculate accuracy.
 */
echo '<h3>Decorator</h3>';

// Create standard Ohmmeter
$ohmMeter1 = new OhmMeter();
echo '<div></b>Resistance: </b>' . $ohmMeter1->getOhm() . '</div>';

// Create advance Ohmmeter
$ohmMeter2 = new AdvanceOhmMeter($ohmMeter1);
echo '<div></b>Resistance: </b>' . $ohmMeter2->getOhm() . '</div>';

/**
 * This code demonstrate Facade pattern.
 * This pattern allows you to hide the complexity of a system by reducing all possible external calls to a single object
 * that delegates them to the corresponding objects in the system.
 * This pattern give us simple way to use complex system.
 *
 * We have complex system (class with many methods) 'WireCalculator' and we can use it, but we can have a simpler way.
 * We create Facade - 'WireCalculatorFacade'. And we can use it as simple way for calculation of wire parameters
 */
echo '<h3>Facade</h3>';

// Create object of complex system
$wireCalculator = new WireCalculator('MTHS-23', 0.5E-3, 3.5);

// Create and use simple way - Facade
echo (new WireCalculatorFacade($wireCalculator))->getWire();

/**
 * This code demonstrate Flyweight pattern.
 * This pattern represent object as unique, but it isn't.
 * This pattern use for minimization consumed memory and calculation resources. It achieved by sharing some resources
 * for many similar objects.
 *
 * We have 'Bank' - it is our resource for sharing. We have 'CreditMaker' - it create resources or return existing
 * resources. And we have 'CreditMarket' for use resources
 */
echo '<h3>Flyweight</h3>';

$creditMaker = new CreditMaker();
$creditMarket = new CreditMarket($creditMaker);

$creditMarket->takeCredit('Vadim', 'Cash', 1000);
$creditMarket->takeCredit('Vitaliy', 'Buy TV', 5678.76);
$creditMarket->takeCredit('Vlad', 'Buy Car', 12345,87);

$creditMarket->showCredits();

/**
 * This code demonstrate Proxy pattern.
 *
 */
echo '<h3>Proxy</h3>';

// Create object
$licenseServer = new LicenseServer();

// Create Proxy object for control object
$secureLicenseServer = new SecureLicenseServer($licenseServer);

echo '<div>' . $secureLicenseServer->getLicense('12345');
echo '<div>' . $secureLicenseServer->getLicense('123');

echo '<hr></br></br></br>';


echo '<h2>Behavioral</h2>';
echo '<hr>';

/**
 * This code demonstrate Chain of Responsibility pattern.
 * This pattern provide organization of the responsibility level in the system.
 * This pattern use objects as chain. Request has inputted from one side and step by step used the objects
 * until suitable object was found.
 *
 * We have three containers: 'Galon', 'Pail', 'Canister'. These classes extend the 'Container'. Class 'Container' has
 * Chain of Responsibility method 'fill'. It realised condition and logic for Chain of objects and find suitable object
 */
echo '<h3>Chain of Responsibilities</h3>';

// Create containers
$galon = new Galon(3);
$pail = new Pail(8);
$canister = new Canister(15);

// Set next chain for each container
$galon->nextContainer($pail);
$pail->nextContainer($canister);

echo '<div>' . $galon->fill(1.5) . '</div></br>';
echo '<div>' . $galon->fill(7) . '</div></br>';
echo '<div>' . $galon->fill(12) . '</div></br>';
echo '<div>' . $galon->fill(100) . '</div>';

/**
 * This code demonstrate ICommand pattern.
 * This pattern provides an action. The command object contains the action itself and its parameters.
 * This pattern gives us encapsulate the actions in the object. Used for separate client and receiver.
 *
 * We have some actions in class 'Mail'. We want use these action using Invoker. We create interface 'ICommand'. And we
 * encapsulated actions in two classes: 'ReceiveMail' and 'SendMail'. Both this classes are implement the 'ICommand'
 * interface. Then we create our Invoker 'MailClient'. This class has execute method witch gets as parameter 'ICommand'
 * And we can use our Invoker 'MailClient' and or two classes 'ReceiveMail' and 'SendMail' for mail actions.
 */
echo '<h3>Command</h3>';

// Create object for mail actions
$mail = new Mail();

// Create two objects for action: receive mail, send mail
$receiveMail = new ReceiveMail($mail);
$sendMail = new SendMail($mail);

// Use mail client for actions with mail
$mailClient = new MailClient();

echo '<div>' . $mailClient->process($receiveMail) . '</div>';
echo '<div>' . $mailClient->process($sendMail) . '</div>';

/**
 * This code demonstrate Iterator pattern. (i skip it !!!)
 *
 */
echo '<h3>Iterator</h3>';


/**
 * This code demonstrate Mediator pattern.
 * This pattern provide interaction for many objects which have a weak relationship. It don't require direct link
 * from one object to another.
 * The mediator pattern add the object for interaction between other objects.
 *
 * We have class 'User' for many objects. This class has method 'sendMessage'. This method gets as parameter
 * the interface 'IChart'. It give as weak relationship for interaction realization. The class 'Chart' it is a mediator.
 * It realize the interaction between users. The chart has method 'showMessage'. This method gets as parameter the 'User'.
 */
echo '<h3>Mediator</h3>';

// Create new Mediator
$chart = new  Chart();

// Create objects for interactions
$chartser1 = new ChartUser('Bill', $chart);
$chartser2 = new ChartUser('Sara', $chart);

echo '<div>' . $chartser1->sendMessage('Hi') . '</div>';
echo '<div>' . $chartser2->sendMessage('Hi there') . '</div>';

/**
 * This code demonstrate Memento pattern.
 * This pattern provide save inner state of object without infringe the encapsulation.
 * The Memento can fix and save the current state of the object for easy to restore it.
 *
 * We have class 'RandomMemento'. It give as possibility for eas save some value. This class has property for keep value
 * and for get it. We have class 'Random'. This class hase methods for generate value and for save and restore it. For
 * Save and restore we use the 'RandomMemento' object.
 */
echo '<h3>Memento</h3>';

// Create random object
$random = new Random();

// Create first random value
$random->setValue();
$firstVal = $random->getValue();
echo "<div><b>First value: </b>$firstVal</div>";

// Save first random value ($savedVal it is the object of RandomMemento)
$savedVal = $random->saveValue();

// Create second random value
$random->setValue();
$secondVal = $random->getValue();
echo "<div><b>Second value: </b>$secondVal</div>";

// Restore previous ($firstVal)
$random->restoreValue($savedVal);
$restoredVal = $random->getValue();
echo "<div><b>Restored value: </b>$restoredVal</div>";

/**
 * This code demonstrate Observer pattern.
 * This pattern provide mechanism for getting notification about state changing other objects.
 * This pattern provide possibilities for the one object notify the others dependent objects about his state changing.
 *
 * We have the support division. We create class for support personal 'SupportWorker'. The personal must have
 * possibilities to know about new questions. This realised in class 'QuestionPosting'. When the question added by
 * method 'addQuestion' the method 'notify' realised the notification process for support.
 */
echo '<h3>Observer</h3>';

// Create support employees
$support1 = new SupportWorker('Anna');
$support2 = new SupportWorker('John');

// Create support observer service
$services = new QuestionPostings();
$services->addObserver($support1);
$services->addObserver($support2);

// Create new Question. At this action all notified observers get this information
$services->addQuestion(new QuestionPost('Network connection'));

/**
 * This code demonstrate Visitor pattern.
 * This pattern describe operation for other objects other classes. visitor can be changed without changing
 * served classes.
 * Visitor provide possibilities to add future operations for objects without their modification.
 *
 * We have classes: 'Gun', 'Rifle', 'MachineGun'. They are implement the interface 'IWeapon'. This interface has a
 * methot 'accept'. This method help realize operations. And now we have interface for Visitor: 'IWeaponProperty'.
 * The class 'Caliber' is the first Visitor and realise standart operation 'getCaliber' of classes
 * 'Gun', 'Rifle', 'MachineGun'. And we also can add another operarion. We create second Visitor 'Weight'.
 * This visitor realise add operation and objects of 'Gun', 'Rifle', 'MachineGun' are not modified.
 *
 */
echo '<h3>Visitor</h3>';

// Create weapons
$gun = new  Gun();
$rifel = new Rifle();
$machineGun = new MachineGun();

// Create Visitor
$caliber = new  Caliber();

echo '<div><b>Gun Caliber: </b>' . $gun->accept($caliber) . '</div>';
echo '<div><b>Rifle Caliber: </b>' . $rifel->accept($caliber) . '</div>';
echo '<div><b>MachineGun Caliber: </b>' . $machineGun->accept($caliber) . '</div>';
echo '</br>';

// Add properties (new Visitor) without objects modification
$weight = new  Weight();

echo '<div><b>Gun Weight: </b>' . $gun->accept($weight) . '</div>';
echo '<div><b>Rifle Weight: </b>' . $rifel->accept($weight) . '</div>';
echo '<div><b>MachineGun Weight: </b>' . $machineGun->accept($weight) . '</div>';

/**
 * This code demonstrate Strategy pattern.
 * This pattern for defining a family of algorithms, encapsulating each of them, and making them interchangeable.
 * This pattern give us possibilities to switch between algorithms depending on situation.
 *
 * We create interface 'IHash'. This interface has a method for create hash from string. Then we create two different
 * algorithms for hash realization. There are classes: 'Hash1' and 'Hash2'. And we realized Strategy class 'HashCreator'.
 * This class in constructor gets as parameter interface 'IHash' and we can set needed realization.
 */
echo '<h3>Strategy</h3>';

// Create string for Hash
$strHash = 'Helo';

// Create first strategy
$hashMaker = new HashCreator(new Hash1());
echo '<div>' . $hashMaker->getHash($strHash) . '</div>';

// Create second strategy
$hashMaker = new HashCreator(new Hash2());
echo '<div>' . $hashMaker->getHash($strHash) . '</div>';

/**
 * This code demonstrate State pattern.
 * This pattern gives possibility to change behavior of object depend of some state.
 *
 * We have class 'TextCreator'. This class has a method for set some state 'setDecorator'. This method accept as parameter
 * interface 'IDecorator'. We have several realizations for this interface: 'Regular', 'Upper', 'Lower'. We can easily
 * change the state by using the method 'setDecorator' of class 'TextCreator'.
 */
echo '<h3>State</h3>';

// Create text
$text = 'AsdFr12Ghj';

// Create text decorator
$decorator = new TextCreator(new Regular());
echo '<div><b>Regular text: </b>' . $decorator->writeText($text) . '</div>';

$decorator->setDecorator(new Upper());
echo '<div><b>UPPER text: </b>' . $decorator->writeText($text) . '</div>';

$decorator->setDecorator(new Lower());
echo '<div><b>lower text: </b>' . $decorator->writeText($text) . '</div>';

/**
 * This code demonstrate Template Method pattern.
 * This pattern determine base of algorithm and provides possibilities for inheritors to change algorithm's steps
 * without changing algorithm's structure.
 * Template Method determine the structure of algorithm and delegate steps realizations to child classes.
 *
 * We have User generator. The Template is class 'UserGenerator'. It's abstract class which has method for structure of
 * algorithm - 'createUser', and has abstract methods for algorithm steps. Child classes 'UG1' and 'UG2' extends
 * 'UserGenerator' and realise the algorithm steps.
 */
echo '<h3>Template Method</h3>';

$ug1 = new UG1();
$ug1->createUser();

echo '</br>';

$ug2 = new UG2();
$ug2->createUser();


echo '<hr></br></br></br>';