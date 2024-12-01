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
│
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
