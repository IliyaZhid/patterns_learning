# Изучение паттернов 📖

Этот репозиторий содержит примеры реализации различных паттернов проектирования на языке PHP. Каждый паттерн находится в
отдельной директории и сопровождается тестами и инструкциями по использованию.

## Структура проекта

<details>
  <summary>Спойлер</summary>

```
patterns_learning/  
├── creational/
│ ├── factory_method/  
│ │ └── ... 
│ ├── abstract_factory/
│ │ └── ...
│ ├── builder/
│ │ └── ...
│ ├── prototype/
│ │ └── ...
│ └── singleton/
│   └── ...
├── structural/
│ ├── adapter/  
│ │ └── ...
│ ├── bridge/  
│ │ └── ...
│ ├── facade/  
│ │ └── ...
│ └── proxy/  
│   └── ...
├── behavioral/
│ ├── strategy/  
│ │ └── ...
│ ├── template_method/  
│ │ └── ...
│ └── observer/  
│   └── ...
└── composer.json
```

</details>

## Порождающие паттерны проектирования

<details>
  <summary>1. Фабричный метод (Factory Method)</summary>

**Описание**: Фабричный метод определяет интерфейс для создания объекта, но позволяет подклассам изменять тип
создаваемого объекта.

**Пример**: Система управления заказами в интернет-магазине, которая поддерживает различные типы заказов (обычный,
предзаказ, заказ с доставкой).

**Использование**:

```bash
cd creational/factory_method
composer install
composer client
composer test
```

**Файловая структура примера**:
```
factory_method/  
├── lib/  
│ ├── Factories/  
│ │ ├── RegularOrderFactory.php  
│ │ ├── PreOrderFactory.php  
│ │ └── DeliveryOrderFactory.php  
│ ├── Orders/  
│ │ ├── IOrder.php  
│ │ ├── RegularOrder.php  
│ │ ├── PreOrder.php  
│ │ └── DeliveryOrder.php  
│ └── OrderFactory.php  
├── tests/  
│ └── OrderFactoryTest.php  
├── client.php  
└── composer.json
```

</details>
<details>
  <summary>2. Абстрактная фабрика (Abstract Factory)</summary>

**Описание**: Абстрактная фабрика предоставляет интерфейс для создания семейств взаимосвязанных или взаимозависимых
объектов без указания их конкретных классов.

**Пример**: Система создания UI-компонентов для разных операционных систем.

Использование:
Создайте файл .env в корне папки abstract_factory с содержимым:
OS=Windows или OS=Mac

```bash
cd creational/abstract_factory
composer install
composer client
composer test
```
**Файловая структура примера**:
```
abstract_factory/
├── lib/
│ ├── Factories/
│ │ ├── GUIFactory.php
│ │ ├── WindowsFactory.php
│ │ └── MacFactory.php
│ └── Products/
│   ├── IButton.php
│   ├── ICheckbox.php
│   ├── WindowsButton.php
│   ├── MacOSButton.php
│   ├── WindowsCheckbox.php
│   └── MacOSCheckbox.php
├── tests/
│ └── AbstractFactoryTest.php
├── client.php  
└── composer.json
```
</details>

<details>
  <summary>3. Строитель (Builder)</summary>

**Описание**: Паттерн Строитель отделяет конструирование сложного объекта от его представления, так что в результате
одного и того же процесса конструирования могут получаться разные представления.

**Пример**: Система создания различных видов пиццы с гибкой конфигурацией.

Использование:

```bash
cd creational/builder
composer install
composer client
composer test
```
**Файловая структура примера**:
```
builder/
├── lib/
│ ├── Builders/
│ │ ├── IPizzaBuilder.php
│ │ ├── PepperoniPizzaBuilder.php
│ │ ├── MushroomPizzaBuilder.php
│ │ └── HawaiianPizzaBuilder.php
│ ├── Products/
│ │ └── Pizza.php
│ └── PizzaDirector.php
├── tests/
│ └── PizzaBuilderTest.php
├── client.php  
└── composer.json
```
</details>
<details>
  <summary>4. Прототип (Prototype)</summary>

**Описание**: Паттерн Прототип позволяет копировать объекты, не вдаваясь в подробности их реализации.

**Пример**: Система создания и клонирования различных видов документов (счета, договора, отчеты).

Использование:

```bash
cd creational/prototype
composer install
composer client
composer test
```
**Файловая структура примера**:
```
prototype/
├── lib/
│ ├── IDocumentPrototype.php
│ ├── Document.php
│ ├── InvoiceDocument.php
│ ├── ContractDocument.php
│ └── ReportDocument.php
├── tests/
│ └── DocumentPrototypeTest.php
├── client.php  
└── composer.json
```
</details>

<details> 
<summary>5. Одиночка (Singleton)</summary>

**Описание**: Паттерн Одиночка гарантирует, что класс имеет только один экземпляр, и предоставляет глобальную точку доступа к этому экземпляру.

**Пример**: Система управления настройками приложения.

**Использование**:

```bash
cd creational/singleton
composer install
composer client
composer test
```
**Файловая структура примера**:
```
singleton/
├── lib/
│ ├── ISettingsInterface.php
│ ├── Settings.php
│ └── AppSettings.php
├── tests/
│ └── SettingsTest.php
├── client.php  
└── composer.json
```
</details>

## Структурные паттерны проектирования

<details> 
<summary>1. Адаптер (Adapter)</summary>

**Описание**: Паттерн Адаптер позволяет объектам с несовместимыми интерфейсами работать вместе. Он оборачивает один из объектов так, чтобы он мог взаимодействовать с другим объектом через общий интерфейс.

**Пример**: Система управления умным домом, которая должна поддерживать работу с устройствами различных производителей.

**Использование**:

```bash
cd creational/adapter
composer install
composer client
composer test
```
**Файловая структура примера**:
```
adapter/
├── lib/
│ ├── Devices/
│ │ ├── ISmartDevice.php
│ │ ├── Light.php
│ │ └── Socket.php
│ ├── SmartHomeController.php
│ └── SocketAdapter.php
├── tests/
│ └── AdapterTest.php
├── client.php
└── composer.json
```
</details>

<details> 
<summary>2. Мост (Bridge)</summary>

**Описание**: Паттерн Мост разделяет один или несколько классов на две отдельные иерархии — абстракцию и реализацию, позволяя изменять их независимо друг от друга.

**Пример**: Система управления мультимедиа, которая должна поддерживать различные типы устройств воспроизведения (телевизоры, радиоприемники) и различные пульты дистанционного управления (классический пульт, продвинутый пульт).

**Использование**:

```bash
cd structural/bridge
composer install
composer client
composer test
```
**Файловая структура примера**:
```

bridge/
├── lib/
│ ├── Devices/
│ │ ├── IDevice.php
│ │ ├── TV.php
│ │ └── Radio.php
│ └── Remotes/
│   ├── RemoteControl.php
│   └── AdvancedRemote.php
├── tests/
│ └── BridgeTest.php
├── client.php
└── composer.json
```
</details>

<details> 
<summary>3. Фасад (Facade)</summary>

**Описание**: Паттерн Фасад предоставляет унифицированный интерфейс к группе интерфейсов в подсистеме, упрощая ее использование. Фасад определяет высокоуровневый интерфейс, который делает подсистему проще для использования.

**Пример**: Система управления заказами, которая должна предоставлять простой интерфейс для выполнения сложных операций, таких как создание заказа, добавление товаров, расчет стоимости и оформление доставки.

**Использование**:

```bash
cd structural/facade
composer install
composer client
composer test
```
**Файловая структура примера**:
```
facade/
├── lib/
│ ├── SubSystems/
│ │ ├── Order.php
│ │ ├── Product.php
│ │ ├── Shipping.php
│ │ └── Payment.php
│ └── OrderFacade.php
├── tests/
│ └── FacadeTest.php
├── client.php
└── composer.json
```
</details>

<details> 
<summary>4. Заместитель (Proxy)</summary>

**Описание**: Паттерн Заместитель предоставляет суррогатный объект, управляющий доступом к другому объекту. Это позволяет выполнять какие-либо действия до или после запроса к основному объекту.

**Пример**: Система кеширования данных, которая должна предоставлять доступ к данным с возможностью кеширования результатов запросов для улучшения производительности.

**Использование**:

```bash
cd structural/proxy
composer install
composer client
composer test
```
**Файловая структура примера**:
```
proxy/
├── lib/
│ ├── DataProvider.php
│ ├── DatabaseDataProvider.php
│ └── CacheProxy.php
├── tests/
│ └── ProxyTest.php
├── client.php
└── composer.json
```
</details>

## Поведенческие паттерны проектирования

<details> 
<summary>1. Стратегия (Strategy)</summary>

**Описание**: Паттерн Стратегия определяет семейство алгоритмов, инкапсулирует каждый из них и делает их взаимозаменяемыми. Это позволяет изменять алгоритмы независимо от клиентов, которые их используют.

**Пример**: Система сортировки данных, которая должна поддерживать различные алгоритмы сортировки (например, сортировка пузырьком, быстрая сортировка, сортировка слиянием).

**Использование**:

```bash
cd behavioral/strategy
composer install
composer client
composer test
```
**Файловая структура примера**:
```
strategy/
├── lib/
│ ├── SortStrategies/
│ │ ├── SortStrategy.php
│ │ ├── BubbleSort.php
│ │ ├── QuickSort.php
│ │ └── MergeSort.php
│ └── Sorter.php
├── tests/
│ └── StrategyTest.php
├── client.php
└── composer.json
```
</details>

<details> 
<summary>2. Шаблонный метод (Template Method)</summary>

**Описание**: Паттерн Шаблонный метод определяет скелет алгоритма в методе, перекладывая ответственность за некоторые его шаги на подклассы. Это позволяет подклассам переопределять шаги алгоритма, не изменяя его структуру.

**Пример**: Система генерации отчетов, которая должна поддерживать различные типы отчетов (например, отчет по продажам, отчет по клиентам).

**Использование**:

```bash
cd behavioral/template_method
composer install
composer client
composer test
```
**Файловая структура примера**:
```

template_method/
├── lib/
│ └── Reports/
│   ├── Report.php
│   ├── SalesReport.php
│   └── CustomerReport.php
├── tests/
│ └── TemplateMethodTest.php
├── client.php
└── composer.json
```
</details>

<details> 
<summary>3. Наблюдатель (Observer)</summary>

**Описание**: Паттерн Наблюдатель определяет зависимость "один ко многим" между объектами таким образом, что при изменении состояния одного объекта все зависящие от него объекты уведомляются и обновляются автоматически.

**Пример**:  Система уведомлений, которая должна уведомлять подписчиков о различных событиях (например, новое сообщение, изменение статуса заказа, новое уведомление).

**Использование**:

```bash
cd behavioral/observer
composer install
composer client
composer test
```
**Файловая структура примера**:
```
observer/
├── lib/
│ ├── Publishers/
│ │ ├── NotificationSystem.php
│ │ └── IPublisher.php
│ └── Subscribers/
│   ├── ISubscriber.php
│   ├── SMSNotifier.php
│   └── EmailNotifier.php
├── tests/
│ └── ObserverTest.php
├── client.php
└── composer.json
```
</details>

## Дополнительные паттерны

В будущем в этот репозиторий могут быть добавлены дополнительные паттерны проектирования с соответствующими примерами и
тестами.
