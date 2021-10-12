<?php

declare(strict_types=1);

use Rector\Php80\Rector\Class_\AnnotationToAttributeRector;
use Rector\Php80\ValueObject\AnnotationToAttribute;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\SymfonyPhpConfig\ValueObjectInliner;

// @see https://symfony.com/blog/new-in-symfony-5-2-constraints-as-php-attributes
return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

    $services->set(AnnotationToAttributeRector::class)
        ->call('configure', [[
            AnnotationToAttributeRector::ANNOTATION_TO_ATTRIBUTE => ValueObjectInliner::inline([
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Bic'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Blank'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Callback'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\CardScheme'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Cascade'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Choice'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Count'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Country'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Currency'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Date'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\DateTime'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\DisableAutoMapping'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\DivisibleBy'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Email'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\EnableAutoMapping'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\EqualTo'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Expression'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\ExpressionLanguageSyntax'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\File'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\GreaterThan'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\GreaterThanOrEqual'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\GroupSequence'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\GroupSequenceProvider'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Hostname'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Iban'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\IdenticalTo'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Image'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Ip'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Isbn'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\IsFalse'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Isin'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\IsNull'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Issn'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\IsTrue'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Json'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Language'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Length'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\LessThan'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\LessThanOrEqual'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Locale'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Luhn'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Negative'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\NegativeOrZero'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\NotBlank'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\NotCompromisedPassword'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\NotEqualTo'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\NotIdenticalTo'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\NotNull'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Positive'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\PositiveOrZero'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Range'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Regex'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Time'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Timezone'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Traverse'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Type'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Ulid'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Unique'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Url'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Uuid'),
                new AnnotationToAttribute('Symfony\Component\Validator\Constraints\Valid'),
                new AnnotationToAttribute('Symfony\Component\Serializer\Annotation\Groups'),
            ]),
        ]]);
};
