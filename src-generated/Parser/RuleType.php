<?php

declare(strict_types=1);

/**
 * This code was generated by Berp (http://https://github.com/gasparnagy/berp/).
 *
 *  Changes to this file may cause incorrect behavior and will be lost if
 *  the code is regenerated.
 */

namespace Cucumber\Gherkin\Parser;

enum RuleType
{
    use TokenRuleTypesCastTrait;

    case None;
    case _EOF; // #EOF
    case _Empty; // #Empty
    case _Comment; // #Comment
    case _TagLine; // #TagLine
    case _FeatureLine; // #FeatureLine
    case _RuleLine; // #RuleLine
    case _BackgroundLine; // #BackgroundLine
    case _ScenarioLine; // #ScenarioLine
    case _ExamplesLine; // #ExamplesLine
    case _StepLine; // #StepLine
    case _DocStringSeparator; // #DocStringSeparator
    case _TableRow; // #TableRow
    case _Language; // #Language
    case _Other; // #Other
    case GherkinDocument; // GherkinDocument! := Feature?
    case Feature; // Feature! := FeatureHeader Background? ScenarioDefinition* Rule*
    case FeatureHeader; // FeatureHeader! := #Language? Tags? #FeatureLine DescriptionHelper
    case Rule; // Rule! := RuleHeader Background? ScenarioDefinition*
    case RuleHeader; // RuleHeader! := Tags? #RuleLine DescriptionHelper
    case Background; // Background! := #BackgroundLine DescriptionHelper Step*
    case ScenarioDefinition; // ScenarioDefinition! [#Empty|#Comment|#TagLine->#ScenarioLine] := Tags? Scenario
    case Scenario; // Scenario! := #ScenarioLine DescriptionHelper Step* ExamplesDefinition*
    case ExamplesDefinition; // ExamplesDefinition! [#Empty|#Comment|#TagLine->#ExamplesLine] := Tags? Examples
    case Examples; // Examples! := #ExamplesLine DescriptionHelper ExamplesTable?
    case ExamplesTable; // ExamplesTable! := #TableRow #TableRow*
    case Step; // Step! := #StepLine StepArg?
    case StepArg; // StepArg := (DataTable | DocString)
    case DataTable; // DataTable! := #TableRow+
    case DocString; // DocString! := #DocStringSeparator #Other* #DocStringSeparator
    case Tags; // Tags! := #TagLine+
    case DescriptionHelper; // DescriptionHelper := #Empty* Description? #Comment*
    case Description; // Description! := #Other+
}