<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'abstracttest' => '/_files/AbstractTest.php',
                'author' => '/_files/Author.php',
                'bankaccount' => '/_files/BankAccount.php',
                'bankaccountexception' => '/_files/BankAccount.php',
                'bankaccounttest' => '/_files/BankAccountTest.php',
                'bankaccountwithcustomextensiontest' => '/_files/BankAccountTest.test.php',
                'basetestlistenersample' => '/_files/BaseTestListenerSample.php',
                'beforeandaftertest' => '/_files/BeforeAndAfterTest.php',
                'beforeclassandafterclasstest' => '/_files/BeforeClassAndAfterClassTest.php',
                'book' => '/_files/Book.php',
                'calculator' => '/_files/Calculator.php',
                'changecurrentworkingdirectorytest' => '/_files/ChangeCurrentWorkingDirectoryTest.php',
                'childsuite' => '/Regression/783/ChildSuite.php',
                'classwithnonpublicattributes' => '/_files/ClassWithNonPublicAttributes.php',
                'classwithtostring' => '/_files/ClassWithToString.php',
                'concretetest' => '/_files/ConcreteTest.php',
                'concretewithmycustomextensiontest' => '/_files/ConcreteTest.my.php',
                'coverageclassextendedtest' => '/_files/CoverageClassExtendedTest.php',
                'coverageclasstest' => '/_files/CoverageClassTest.php',
                'coveragefunctionparenthesestest' => '/_files/CoverageFunctionParenthesesTest.php',
                'coveragefunctionparentheseswhitespacetest' => '/_files/CoverageFunctionParenthesesWhitespaceTest.php',
                'coveragefunctiontest' => '/_files/CoverageFunctionTest.php',
                'coveragemethodonelineannotationtest' => '/_files/CoverageMethodOneLineAnnotationTest.php',
                'coveragemethodparenthesestest' => '/_files/CoverageMethodParenthesesTest.php',
                'coveragemethodparentheseswhitespacetest' => '/_files/CoverageMethodParenthesesWhitespaceTest.php',
                'coveragemethodtest' => '/_files/CoverageMethodTest.php',
                'coveragenonetest' => '/_files/CoverageNoneTest.php',
                'coveragenothingtest' => '/_files/CoverageNothingTest.php',
                'coveragenotprivatetest' => '/_files/CoverageNotPrivateTest.php',
                'coveragenotprotectedtest' => '/_files/CoverageNotProtectedTest.php',
                'coveragenotpublictest' => '/_files/CoverageNotPublicTest.php',
                'coverageprivatetest' => '/_files/CoveragePrivateTest.php',
                'coverageprotectedtest' => '/_files/CoverageProtectedTest.php',
                'coveragepublictest' => '/_files/CoveragePublicTest.php',
                'coveragetwodefaultclassannotations' => '/_files/CoverageTwoDefaultClassAnnotations.php',
                'coveredclass' => '/_files/CoveredClass.php',
                'coveredparentclass' => '/_files/CoveredClass.php',
                'customprinter' => '/_files/CustomPrinter.php',
                'dataproviderfiltertest' => '/_files/DataProviderFilterTest.php',
                'dataprovidertest' => '/_files/DataProviderTest.php',
                'dependencyfailuretest' => '/_files/DependencyFailureTest.php',
                'dependencysuccesstest' => '/_files/DependencySuccessTest.php',
                'dependencytestsuite' => '/_files/DependencyTestSuite.php',
                'doubletestcase' => '/_files/DoubleTestCase.php',
                'dummyexception' => '/_files/DummyException.php',
                'emptytestcasetest' => '/_files/EmptyTestCaseTest.php',
                'error' => '/_files/Error.php',
                'exceptioninassertpostconditionstest' => '/_files/ExceptionInAssertPostConditionsTest.php',
                'exceptioninassertpreconditionstest' => '/_files/ExceptionInAssertPreConditionsTest.php',
                'exceptioninsetuptest' => '/_files/ExceptionInSetUpTest.php',
                'exceptioninteardowntest' => '/_files/ExceptionInTearDownTest.php',
                'exceptionintest' => '/_files/ExceptionInTest.php',
                'exceptionstacktest' => '/_files/ExceptionStack.php',
                'exceptionstacktestexception' => '/_files/ExceptionStack.php',
                'exceptiontest' => '/_files/ExceptionTest.php',
                'extensions_repeatedtesttest' => '/Extensions/RepeatedTestTest.php',
                'failure' => '/_files/Failure.php',
                'failuretest' => '/_files/FailureTest.php',
                'fataltest' => '/_files/FatalTest.php',
                'foo\\coveredclass' => '/_files/NamespaceCoveredClass.php',
                'foo\\coveredparentclass' => '/_files/NamespaceCoveredClass.php',
                'foo_bar_issue684test' => '/Regression/684/Issue684Test.php',
                'framework_assert_functionstest' => '/Framework/Assert/FunctionsTest.php',
                'framework_asserttest' => '/Framework/AssertTest.php',
                'framework_basetestlistenertest' => '/Framework/BaseTestListenerTest.php',
                'framework_comparatortest' => '/Framework/ComparatorTest.php',
                'framework_constraint_jsonmatches_errormessageprovidertest' => '/Framework/Constraint/JsonMatches/ErrorMessageProviderTest.php',
                'framework_constraint_jsonmatchestest' => '/Framework/Constraint/JsonMatchesTest.php',
                'framework_constrainttest' => '/Framework/ConstraintTest.php',
                'framework_suitetest' => '/Framework/SuiteTest.php',
                'framework_testcasetest' => '/Framework/TestCaseTest.php',
                'framework_testfailuretest' => '/Framework/TestFailureTest.php',
                'framework_testimplementortest' => '/Framework/TestImplementorTest.php',
                'framework_testlistenertest' => '/Framework/TestListenerTest.php',
                'incompletetest' => '/_files/IncompleteTest.php',
                'inheritedtestcase' => '/_files/InheritedTestCase.php',
                'initest' => '/_files/IniTest.php',
                'issue1021test' => '/Regression/1021/Issue1021Test.php',
                'issue244exception' => '/Regression/GitHub/244/Issue244Test.php',
                'issue244exceptionintcode' => '/Regression/GitHub/244/Issue244Test.php',
                'issue244test' => '/Regression/GitHub/244/Issue244Test.php',
                'issue322test' => '/Regression/GitHub/322/Issue322Test.php',
                'issue433test' => '/Regression/GitHub/433/Issue433Test.php',
                'issue445test' => '/Regression/GitHub/445/Issue445Test.php',
                'issue498test' => '/Regression/GitHub/498/Issue498Test.php',
                'issue503test' => '/Regression/GitHub/503/Issue503Test.php',
                'issue523' => '/Regression/523/Issue523Test.php',
                'issue523test' => '/Regression/523/Issue523Test.php',
                'issue578test' => '/Regression/578/Issue578Test.php',
                'issue581test' => '/Regression/GitHub/581/Issue581Test.php',
                'issue74test' => '/Regression/GitHub/74/Issue74Test.php',
                'issue765test' => '/Regression/GitHub/765/Issue765Test.php',
                'mockrunner' => '/_files/MockRunner.php',
                'multidependencytest' => '/_files/MultiDependencyTest.php',
                'my\\space\\exceptionnamespacetest' => '/_files/ExceptionNamespaceTest.php',
                'namespacecoverageclassextendedtest' => '/_files/NamespaceCoverageClassExtendedTest.php',
                'namespacecoverageclasstest' => '/_files/NamespaceCoverageClassTest.php',
                'namespacecoveragecoversclasspublictest' => '/_files/NamespaceCoverageCoversClassPublicTest.php',
                'namespacecoveragecoversclasstest' => '/_files/NamespaceCoverageCoversClassTest.php',
                'namespacecoveragemethodtest' => '/_files/NamespaceCoverageMethodTest.php',
                'namespacecoveragenotprivatetest' => '/_files/NamespaceCoverageNotPrivateTest.php',
                'namespacecoveragenotprotectedtest' => '/_files/NamespaceCoverageNotProtectedTest.php',
                'namespacecoveragenotpublictest' => '/_files/NamespaceCoverageNotPublicTest.php',
                'namespacecoverageprivatetest' => '/_files/NamespaceCoveragePrivateTest.php',
                'namespacecoverageprotectedtest' => '/_files/NamespaceCoverageProtectedTest.php',
                'namespacecoveragepublictest' => '/_files/NamespaceCoveragePublicTest.php',
                'newexception' => '/Regression/GitHub/74/NewException.php',
                'noargtestcasetest' => '/_files/NoArgTestCaseTest.php',
                'nonstatic' => '/_files/NonStatic.php',
                'notestcaseclass' => '/_files/NoTestCaseClass.php',
                'notestcases' => '/_files/NoTestCases.php',
                'notexistingcoveredelementtest' => '/_files/NotExistingCoveredElementTest.php',
                'nothingtest' => '/_files/NothingTest.php',
                'notpublictestcase' => '/_files/NotPublicTestCase.php',
                'notvoidtestcase' => '/_files/NotVoidTestCase.php',
                'onetest' => '/Regression/783/OneTest.php',
                'onetestcase' => '/_files/OneTestCase.php',
                'outputtestcase' => '/_files/OutputTestCase.php',
                'overridetestcase' => '/_files/OverrideTestCase.php',
                'parentclasswithprivateattributes' => '/_files/ClassWithNonPublicAttributes.php',
                'parentclasswithprotectedattributes' => '/_files/ClassWithNonPublicAttributes.php',
                'parentsuite' => '/Regression/783/ParentSuite.php',
                'requirementsclassdocblocktest' => '/_files/RequirementsClassDocBlockTest.php',
                'requirementstest' => '/_files/RequirementsTest.php',
                'runner_basetestrunnertest' => '/Runner/BaseTestRunnerTest.php',
                'samplearrayaccess' => '/_files/SampleArrayAccess.php',
                'sampleclass' => '/_files/SampleClass.php',
                'singleton' => '/_files/Singleton.php',
                'stacktest' => '/_files/StackTest.php',
                'struct' => '/_files/Struct.php',
                'success' => '/_files/Success.php',
                'templatemethodstest' => '/_files/TemplateMethodsTest.php',
                'testclass' => '/Framework/ComparatorTest.php',
                'testclasscomparator' => '/Framework/ComparatorTest.php',
                'testiterator' => '/_files/TestIterator.php',
                'testiterator2' => '/_files/TestIterator2.php',
                'throwexceptiontestcase' => '/_files/ThrowExceptionTestCase.php',
                'thrownoexceptiontestcase' => '/_files/ThrowNoExceptionTestCase.php',
                'twotest' => '/Regression/783/TwoTest.php',
                'util_configurationtest' => '/Util/ConfigurationTest.php',
                'util_testdox_nameprettifiertest' => '/Util/TestDox/NamePrettifierTest.php',
                'util_regextest' => '/Util/RegexTest.php',
                'util_testtest' => '/Util/TestTest.php',
                'util_xmltest' => '/Util/XMLTest.php',
                'wasrun' => '/_files/WasRun.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);
// @codeCoverageIgnoreEnd
