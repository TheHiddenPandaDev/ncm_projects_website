<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Barn2\Plugin\WC_Product_Options\Dependencies\Carbon\PHPStan;

use Barn2\Plugin\WC_Product_Options\Dependencies\PHPStan\Reflection\Assertions;
use Barn2\Plugin\WC_Product_Options\Dependencies\PHPStan\Reflection\ClassReflection;
use Barn2\Plugin\WC_Product_Options\Dependencies\PHPStan\Reflection\MethodReflection;
use Barn2\Plugin\WC_Product_Options\Dependencies\PHPStan\Reflection\MethodsClassReflectionExtension;
use Barn2\Plugin\WC_Product_Options\Dependencies\PHPStan\Reflection\Php\PhpMethodReflectionFactory;
use Barn2\Plugin\WC_Product_Options\Dependencies\PHPStan\Reflection\ReflectionProvider;
use Barn2\Plugin\WC_Product_Options\Dependencies\PHPStan\Type\TypehintHelper;
/**
 * Class MacroExtension.
 *
 * @codeCoverageIgnore Pure PHPStan wrapper.
 * @internal
 */
final class MacroExtension implements MethodsClassReflectionExtension
{
    /**
     * @var PhpMethodReflectionFactory
     */
    protected $methodReflectionFactory;
    /**
     * @var MacroScanner
     */
    protected $scanner;
    /**
     * Extension constructor.
     *
     * @param PhpMethodReflectionFactory $methodReflectionFactory
     * @param ReflectionProvider         $reflectionProvider
     */
    public function __construct(PhpMethodReflectionFactory $methodReflectionFactory, ReflectionProvider $reflectionProvider)
    {
        $this->scanner = new MacroScanner($reflectionProvider);
        $this->methodReflectionFactory = $methodReflectionFactory;
    }
    /**
     * {@inheritdoc}
     */
    public function hasMethod(ClassReflection $classReflection, string $methodName) : bool
    {
        return $this->scanner->hasMethod($classReflection->getName(), $methodName);
    }
    /**
     * {@inheritdoc}
     */
    public function getMethod(ClassReflection $classReflection, string $methodName) : MethodReflection
    {
        $builtinMacro = $this->scanner->getMethod($classReflection->getName(), $methodName);
        $supportAssertions = \class_exists(Assertions::class);
        return $this->methodReflectionFactory->create($classReflection, null, $builtinMacro, $classReflection->getActiveTemplateTypeMap(), [], TypehintHelper::decideTypeFromReflection($builtinMacro->getReturnType()), null, null, $builtinMacro->isDeprecated()->yes(), $builtinMacro->isInternal(), $builtinMacro->isFinal(), $supportAssertions ? null : $builtinMacro->getDocComment(), $supportAssertions ? Assertions::createEmpty() : null, null, $builtinMacro->getDocComment(), []);
    }
}
