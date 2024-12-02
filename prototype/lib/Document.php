<?php

namespace Prototype;

class Document implements IDocumentPrototype
{
    public string $name;
    public string $type;
    public \DateTime $date_created;
    public string $author;
    public string $content;

    public function __construct($name, $type, $author, $content, \DateTime $date_created)
    {
        $this->name = $name;
        $this->type = $type;
        $this->date_created = $date_created;
        $this->author = $author;
        $this->content = $content;
    }

    public function clone(): IDocumentPrototype
    {
        return new self($this->name, $this->type, $this->author, $this->content, $this->date_created);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getDateCreated(): \DateTime
    {
        return $this->date_created;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }

    public function __toString(): string
    {
        return "Документ \"{$this->name}\":\n" .
            "- Тип: {$this->type}\n" .
            "- Дата создания: {$this->date_created->format('d.m.Y')}\n" .
            "- Автор: {$this->author}\n" .
            "- Содержание: {$this->content}\n";
    }

}
