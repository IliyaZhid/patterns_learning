# Patterns Learning

Этот репозиторий содержит примеры реализации различных паттернов проектирования на языке PHP. Каждый паттерн находится в отдельной директории и сопровождается тестами и инструкциями по использованию.

## Структура проекта
```
patterns_learning/  
│  
├── factory_method/  
│ ├── lib/  
│ │ ├── Factories/  
│ │ │ ├── RegularOrderFactory.php  
│ │ │ ├── PreOrderFactory.php  
│ │ │ └── DeliveryOrderFactory.php  
│ │ ├── Orders/  
│ │ │ ├── IOrder.php  
│ │ │ ├── RegularOrder.php  
│ │ │ ├── PreOrder.php  
│ │ │ └── DeliveryOrder.php  
│ │ └── OrderFactory.php  
│ ├── tests/  
│ │ └── OrderFactoryTest.php  
│ ├── client.php  
│ └── composer.json  
├── abstract_factory/
│ ├── lib/
│ │ ├── Factories/
│ │ │ ├── GUIFactory.php
│ │ │ ├── WindowsFactory.php
│ │ │ └── MacFactory.php
│ │ ├── Products/
│ │ │ ├── IButton.php
│ │ │ ├── ICheckbox.php
│ │ │ ├── WindowsButton.php
│ │ │ ├── MacOSButton.php
│ │ │ ├── WindowsCheckbox.php
│ │ │ └── MacOSCheckbox.php
│ ├── tests/
│ │ └── AbstractFactoryTest.php
│ ├── client.php  
│ └── composer.json
├── builder/
│ ├── lib/
│ │ ├── Builders/
│ │ │ ├── IPizzaBuilder.php
│ │ │ ├── PepperoniPizzaBuilder.php
│ │ │ ├── MushroomPizzaBuilder.php
│ │ │ └── HawaiianPizzaBuilder.php
│ │ ├── Products/
│ │ │ └── Pizza.php
│ │ └── PizzaDirector.php
│ ├── tests/
│ │ └── PizzaBuilderTest.php
│ ├── client.php  
│ └── composer.json
└── composer.json
```

## Паттерны проектирования

### 1. Фабричный метод (Factory Method)

**Описание**: Фабричный метод определяет интерфейс для создания объекта, но позволяет подклассам изменять тип создаваемого объекта.

**Пример**: Система управления заказами в интернет-магазине, которая поддерживает различные типы заказов (обычный, предзаказ, заказ с доставкой).

**Использование**:

```bash
cd factory_method
composer install
php client.php
composer test
```
### 2. Абстрактная фабрика (Abstract Factory)
**Описание**: Абстрактная фабрика предоставляет интерфейс для создания семейств взаимосвязанных или взаимозависимых объектов без указания их конкретных классов.

**Пример**: Система создания UI-компонентов для разных операционных систем.

Использование:
Создайте файл .env в корне папки abstract_factory с содержимым:
OS=Windows или OS=Mac

```bash
cd abstract_factory
composer install
php client.php
composer test
```

### 3. Строитель (Builder)
**Описание**: Паттерн Строитель отделяет конструирование сложного объекта от его представления, так что в результате одного и того же процесса конструирования могут получаться разные представления.

**Пример**: Система создания различных видов пиццы с гибкой конфигурацией.

Использование:

```bash
cd builder
composer install
php client.php
composer test
```

## Дополнительные паттерны
В будущем в этот репозиторий могут быть добавлены дополнительные паттерны проектирования с соответствующими примерами и тестами.
