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
│ └── adapter/  
│   └── ...
├── behavioral/
│ └── ...
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
php client.php
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
php client.php
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
│ ├── Products/
│ │ ├── IButton.php
│ │ ├── ICheckbox.php
│ │ ├── WindowsButton.php
│ │ ├── MacOSButton.php
│ │ ├── WindowsCheckbox.php
│ │ └── MacOSCheckbox.php
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
php client.php
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
php client.php
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
php client.php
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
php client.php
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
php client.php
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
│ ├── Remotes/
│ │ ├── RemoteControl.php
│ │ └── AdvancedRemote.php
├── tests/
│ └── BridgeTest.php
├── client.php
└── composer.json
```
</details>

## Поведенческие паттерны проектирования

Work in progress...

## Дополнительные паттерны

В будущем в этот репозиторий могут быть добавлены дополнительные паттерны проектирования с соответствующими примерами и
тестами.
