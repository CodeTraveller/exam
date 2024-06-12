<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionOptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            "Physics" => [
                [
                    "question" => "What is the unit of force?",
                    "options" => [
                        ["option_title" => "Joule", "is_correct" => "0"],
                        ["option_title" => "Newton", "is_correct" => "1"],
                        ["option_title" => "Pascal", "is_correct" => "0"],
                        ["option_title" => "Watt", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "Who formulated the laws of motion?",
                    "options" => [
                        ["option_title" => "Albert Einstein", "is_correct" => "0"],
                        ["option_title" => "Galileo Galilei", "is_correct" => "0"],
                        ["option_title" => "Isaac Newton", "is_correct" => "1"],
                        ["option_title" => "Nikola Tesla", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the speed of light in a vacuum?",
                    "options" => [
                        ["option_title" => "3 x 10^6 m/s", "is_correct" => "0"],
                        ["option_title" => "3 x 10^7 m/s", "is_correct" => "0"],
                        ["option_title" => "3 x 10^8 m/s", "is_correct" => "1"],
                        ["option_title" => "3 x 10^9 m/s", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the formula for kinetic energy?",
                    "options" => [
                        ["option_title" => "0.5 mv^2", "is_correct" => "1"],
                        ["option_title" => "mgh", "is_correct" => "0"],
                        ["option_title" => "0.5 mv", "is_correct" => "0"],
                        ["option_title" => "mv^2/2", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the primary cause of tides on Earth?",
                    "options" => [
                        ["option_title" => "Wind", "is_correct" => "0"],
                        ["option_title" => "Sun", "is_correct" => "0"],
                        ["option_title" => "Moon", "is_correct" => "1"],
                        ["option_title" => "Earth\'s rotation", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "Which particle is negatively charged?",
                    "options" => [
                        ["option_title" => "Proton", "is_correct" => "0"],
                        ["option_title" => "Neutron", "is_correct" => "0"],
                        ["option_title" => "Electron", "is_correct" => "1"],
                        ["option_title" => "Photon", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is Ohm\'s Law?",
                    "options" => [
                        ["option_title" => "V = IR", "is_correct" => "1"],
                        ["option_title" => "P = IV", "is_correct" => "0"],
                        ["option_title" => "F = ma", "is_correct" => "0"],
                        ["option_title" => "E = mc^2", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What does E=mc^2 represent?",
                    "options" => [
                        ["option_title" => "Kinetic energy", "is_correct" => "0"],
                        ["option_title" => "Potential energy", "is_correct" => "0"],
                        ["option_title" => "Mass-energy equivalence", "is_correct" => "1"],
                        ["option_title" => "Electric field", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the unit of electrical resistance?",
                    "options" => [
                        ["option_title" => "Ampere", "is_correct" => "0"],
                        ["option_title" => "Volt", "is_correct" => "0"],
                        ["option_title" => "Ohm", "is_correct" => "1"],
                        ["option_title" => "Coulomb", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the principle of a lever?",
                    "options" => [
                        ["option_title" => "Conservation of energy", "is_correct" => "0"],
                        ["option_title" => "Mechanical advantage", "is_correct" => "1"],
                        ["option_title" => "Conservation of momentum", "is_correct" => "0"],
                        ["option_title" => "Bernoulli’s principle", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "Who discovered the electron?",
                    "options" => [
                        ["option_title" => "J.J. Thomson", "is_correct" => "1"],
                        ["option_title" => "Ernest Rutherford", "is_correct" => "0"],
                        ["option_title" => "Niels Bohr", "is_correct" => "0"],
                        ["option_title" => "James Clerk Maxwell", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the acceleration due to gravity on Earth?",
                    "options" => [
                        ["option_title" => "9.8 m/s²", "is_correct" => "1"],
                        ["option_title" => "9.8 km/s²", "is_correct" => "0"],
                        ["option_title" => "9.8 cm/s²", "is_correct" => "0"],
                        ["option_title" => "9.8 mm/s²", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the SI unit of power?",
                    "options" => [
                        ["option_title" => "Joule", "is_correct" => "0"],
                        ["option_title" => "Watt", "is_correct" => "1"],
                        ["option_title" => "Newton", "is_correct" => "0"],
                        ["option_title" => "Tesla", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What does a capacitor store?",
                    "options" => [
                        ["option_title" => "Energy", "is_correct" => "0"],
                        ["option_title" => "Charge", "is_correct" => "1"],
                        ["option_title" => "Mass", "is_correct" => "0"],
                        ["option_title" => "Momentum", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the formula for momentum?",
                    "options" => [
                        ["option_title" => "p = mv", "is_correct" => "1"],
                        ["option_title" => "p = ma", "is_correct" => "0"],
                        ["option_title" => "p = mv^2", "is_correct" => "0"],
                        ["option_title" => "p = mgh", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" =>
                    "Which law explains the relationship between the pressure and volume of a gas?",
                    "options" => [
                        ["option_title" => "Boyle\'s Law", "is_correct" => "1"],
                        ["option_title" => "Charles\'s Law", "is_correct" => "0"],
                        ["option_title" => "Avogadro\'s Law", "is_correct" => "0"],
                        ["option_title" => "Newton\'s Law", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the unit of frequency?",
                    "options" => [
                        ["option_title" => "Hertz", "is_correct" => "1"],
                        ["option_title" => "Pascal", "is_correct" => "0"],
                        ["option_title" => "Decibel", "is_correct" => "0"],
                        ["option_title" => "Newton", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the smallest particle of an element?",
                    "options" => [
                        ["option_title" => "Molecule", "is_correct" => "0"],
                        ["option_title" => "Atom", "is_correct" => "1"],
                        ["option_title" => "Electron", "is_correct" => "0"],
                        ["option_title" => "Proton", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the device used to measure electric current?",
                    "options" => [
                        ["option_title" => "Voltmeter", "is_correct" => "0"],
                        ["option_title" => "Ammeter", "is_correct" => "1"],
                        ["option_title" => "Ohmmeter", "is_correct" => "0"],
                        ["option_title" => "Thermometer", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" =>
                    "Which phenomenon explains the bending of light as it passes from one medium to another?",
                    "options" => [
                        ["option_title" => "Reflection", "is_correct" => "0"],
                        ["option_title" => "Refraction", "is_correct" => "1"],
                        ["option_title" => "Diffraction", "is_correct" => "0"],
                        ["option_title" => "Dispersion", "is_correct" => "0"],
                    ],
                ],
            ],
            "Chemistry" => [
                [
                    "question" => "What is the chemical symbol for gold?",
                    "options" => [
                        ["option_title" => "Au", "is_correct" => "1"],
                        ["option_title" => "Ag", "is_correct" => "0"],
                        ["option_title" => "Pb", "is_correct" => "0"],
                        ["option_title" => "Fe", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the pH of pure water?",
                    "options" => [
                        ["option_title" => "5", "is_correct" => "0"],
                        ["option_title" => "7", "is_correct" => "1"],
                        ["option_title" => "9", "is_correct" => "0"],
                        ["option_title" => "11", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "Who is known as the father of the periodic table?",
                    "options" => [
                        ["option_title" => "Albert Einstein", "is_correct" => "0"],
                        ["option_title" => "Dmitri Mendeleev", "is_correct" => "1"],
                        ["option_title" => "Marie Curie", "is_correct" => "0"],
                        ["option_title" => "Robert Hooke", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the main gas found in the Earth\'s atmosphere?",
                    "options" => [
                        ["option_title" => "Oxygen", "is_correct" => "0"],
                        ["option_title" => "Hydrogen", "is_correct" => "0"],
                        ["option_title" => "Nitrogen", "is_correct" => "1"],
                        ["option_title" => "Carbon Dioxide", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "Which element has the highest melting point?",
                    "options" => [
                        ["option_title" => "Iron", "is_correct" => "0"],
                        ["option_title" => "Gold", "is_correct" => "0"],
                        ["option_title" => "Tungsten", "is_correct" => "1"],
                        ["option_title" => "Carbon", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" =>
                    "What type of bond involves the sharing of electron pairs between atoms?",
                    "options" => [
                        ["option_title" => "Ionic bond", "is_correct" => "0"],
                        ["option_title" => "Covalent bond", "is_correct" => "1"],
                        ["option_title" => "Metallic bond", "is_correct" => "0"],
                        ["option_title" => "Hydrogen bond", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the chemical formula for table salt?",
                    "options" => [
                        ["option_title" => "NaCl", "is_correct" => "1"],
                        ["option_title" => "KCl", "is_correct" => "0"],
                        ["option_title" => "MgCl2", "is_correct" => "0"],
                        ["option_title" => "CaCl2", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the common name for H2O2?",
                    "options" => [
                        ["option_title" => "Water", "is_correct" => "0"],
                        ["option_title" => "Hydrogen Peroxide", "is_correct" => "1"],
                        ["option_title" => "Hydrochloric Acid", "is_correct" => "0"],
                        ["option_title" => "Methane", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" =>
                    "Which element is the most abundant in the Earth\'s crust?",
                    "options" => [
                        ["option_title" => "Oxygen", "is_correct" => "1"],
                        ["option_title" => "Silicon", "is_correct" => "0"],
                        ["option_title" => "Aluminum", "is_correct" => "0"],
                        ["option_title" => "Iron", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the main component of natural gas?",
                    "options" => [
                        ["option_title" => "Ethane", "is_correct" => "0"],
                        ["option_title" => "Methane", "is_correct" => "1"],
                        ["option_title" => "Propane", "is_correct" => "0"],
                        ["option_title" => "Butane", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the chemical name for baking soda?",
                    "options" => [
                        ["option_title" => "Sodium Carbonate", "is_correct" => "0"],
                        ["option_title" => "Sodium Bicarbonate", "is_correct" => "1"],
                        ["option_title" => "Calcium Carbonate", "is_correct" => "0"],
                        ["option_title" => "Potassium Carbonate", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the molar mass of water (H2O)?",
                    "options" => [
                        ["option_title" => "16 g/mol", "is_correct" => "0"],
                        ["option_title" => "18 g/mol", "is_correct" => "1"],
                        ["option_title" => "20 g/mol", "is_correct" => "0"],
                        ["option_title" => "22 g/mol", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" =>
                    "Which gas is released during the photosynthesis process?",
                    "options" => [
                        ["option_title" => "Nitrogen", "is_correct" => "0"],
                        ["option_title" => "Oxygen", "is_correct" => "1"],
                        ["option_title" => "Carbon Dioxide", "is_correct" => "0"],
                        ["option_title" => "Hydrogen", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the formula for sulfuric acid?",
                    "options" => [
                        ["option_title" => "HCl", "is_correct" => "0"],
                        ["option_title" => "H2SO4", "is_correct" => "1"],
                        ["option_title" => "HNO3", "is_correct" => "0"],
                        ["option_title" => "H2CO3", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" =>
                    "What is the most reactive group of elements in the periodic table?",
                    "options" => [
                        ["option_title" => "Noble Gases", "is_correct" => "0"],
                        ["option_title" => "Halogens", "is_correct" => "0"],
                        ["option_title" => "Alkali Metals", "is_correct" => "1"],
                        ["option_title" => "Alkaline Earth Metals", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" =>
                    "Which chemical element is represented by the symbol \'K\'?",
                    "options" => [
                        ["option_title" => "Krypton", "is_correct" => "0"],
                        ["option_title" => "Potassium", "is_correct" => "1"],
                        ["option_title" => "Calcium", "is_correct" => "0"],
                        ["option_title" => "Sodium", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" =>
                    "What is the term for a solution with a pH greater than 7?",
                    "options" => [
                        ["option_title" => "Acidic", "is_correct" => "0"],
                        ["option_title" => "Basic", "is_correct" => "1"],
                        ["option_title" => "Neutral", "is_correct" => "0"],
                        ["option_title" => "Saturated", "is_correct" => "0"],
                    ],
                ],
                [
                    "question" => "What is the primary component of limestone?",
                    "options" => [
                        ["option_title" => "Calcium Carbonate", "is_correct" => "1"],
                        ["option_title" => "Sodium Carbonate", "is_correct" => "0"],
                        ["option_title" => "Magnesium Carbonate", "is_correct" => "0"],
                        ["option_title" => "Potassium Carbonate", "is_correct" => "0"],
                    ],
                ],
            ]
        ];

        DB::beginTransaction();

        try {
            foreach ($questions as $subject => $questions) {
                $subject = Subject::where('title', $subject)->firstOrFail();

                foreach ($questions as $question) {
                    $questionModel = $subject->questions()->firstOrCreate(['question' => $question['question']]);

                    $options = [];
                    foreach ($question['options'] as $option) {
                        // $option['question_id'] = $questionModel->id;
                        $options[] = $option;
                    }

                    if ($questionModel->options->isEmpty()) {
                        $questionModel->options()->createMany($question['options']);
                    } else {
                        foreach ($question['options'] as $option) {
                            $questionModel->options()->updateOrCreate(
                                ['option_title' => $option['option_title']],
                                $option,
                            );
                        }
                    }
                }
            }

            DB::commit();
        } catch (\Exception $e) {

            DB::rollback();

            dd($e->getMessage());
        }
    }
}
