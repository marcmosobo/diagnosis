<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Diagnosis;

class DiagnosesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diagnosis::create([
            'symptoms' => 'Fever
                            Chills
                            General feeling of discomfort
                            Headache
                            Nausea and vomiting
                            Diarrhea
                            Abdominal pain
                            Muscle or joint pain
                            Fatigue
                            Rapid breathing
                            Rapid heart rate
                            Cough',
            'disease' => 'Malaria',
            'disease_description' => 'Malaria is a disease caused by a parasite. The parasite is spread to humans through the bites of infected mosquitoes. People who have malaria usually feel very sick with a high fever and shaking chills.

            While the disease is uncommon in temperate climates, malaria is still common in tropical and subtropical countries. Each year nearly 290 million people are infected with malaria, and more than 400,000 people die of the disease.
            
            To reduce malaria infections, world health programs distribute preventive drugs and insecticide-treated bed nets to protect people from mosquito bites. The World Health Organization has recommended a malaria vaccine for use in children who live in countries with high numbers of malaria cases.
            
            Protective clothing, bed nets and insecticides can protect you while traveling. You also can take preventive medicine before, during and after a trip to a high-risk area. Many malaria parasites have developed resistance to common drugs used to treat the disease'
        ]);
        Diagnosis::create([
            'symptoms' => 'Fever that starts low and increases daily, possibly reaching as high as 104.9 F (40.5 C)
                            Headache
                            Weakness and fatigue
                            Muscle aches
                            Sweating
                            Dry cough
                            Loss of appetite and weight loss
                            Stomach pain
                            Diarrhea or constipation
                            Rash
                            Extremely swollen stomach',
            'disease' => 'Typhoid',
            'disease_description' => 'Typhoid fever is caused by Salmonella typhi bacteria. Typhoid fever is rare in developed countries. It is still a serious health threat in the developing world, especially for children.

            Contaminated food and water or close contact with an infected person cause typhoid fever.
            Most people who have typhoid fever feel better a few days after they start antibiotic treatment, but a small number of them may die of complications. Vaccines against typhoid fever are only partially effective.
             Vaccines usually are reserved for those who may be exposed to the disease or who are traveling to areas where typhoid fever is common.'
        ]);
        Diagnosis::create([
            'symptoms' => 'Runny or stuffy nose
                            Sore throat
                            Cough
                            Congestion
                            Slight body aches or a mild headache
                            Sneezing
                            Low-grade fever
                            Generally feeling unwell',
            'disease' => 'Common cold',
            'disease_description' => "The common cold is a viral infection of your nose and throat (upper respiratory tract). It's usually harmless, although it might not feel that way. Many types of viruses can cause a common cold.

            Healthy adults can expect to have two or three colds each year. Infants and young children may have even more frequent colds.
            
            Most people recover from a common cold in a week or 10 days. Symptoms might last longer in people who smoke. Generally, you don't need medical attention for a common cold. However, if symptoms don't improve or if they get worse, see your doctor."
        ]);
        Diagnosis::create([
            'symptoms' => 'fever
                            cough
                            tiredness
                            loss of taste or smell
                            sore throat
                            headache
                            aches and pains
                            diarrhoea
                            a rash on skin, or discolouration of fingers or toes
                            red or irritated eyes
                            difficulty breathing or shortness of breath
                            loss of speech or mobility, or confusion
                            chest pain',
            'disease' => 'Covid-19',
            'disease_description' => 'Coronaviruses are a family of viruses that can cause illnesses such as the common cold, severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a new coronavirus was identified as the cause of a disease outbreak that originated in China.

            The virus is known as severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The disease it causes is called coronavirus disease 2019 (COVID-19). In March 2020, the World Health Organization (WHO) declared the COVID-19 outbreak a pandemic.
            
            Public health groups, including the U.S. Centers for Disease Control and Prevention (CDC) and WHO, are monitoring the COVID-19 pandemic and posting updates on their websites. These groups have also issued recommendations for preventing and treating the virus that causes COVID-19.'
        ]);
        Diagnosis::create([
            'symptoms' => "Diarrhea. Cholera-related diarrhea comes on suddenly and can quickly cause dangerous fluid loss — as much as a quart (about 1 liter) an hour. Diarrhea due to cholera often has a pale, milky appearance that resembles water in which rice has been rinsed.
            Nausea and vomiting. Vomiting occurs especially in the early stages of cholera and can last for hours.
            Dehydration. Dehydration can develop within hours after cholera symptoms start and range from mild to severe. A loss of 10% or more of body weight indicates severe dehydration.
            
            Signs and symptoms of cholera dehydration include irritability, fatigue, sunken eyes, a dry mouth, extreme thirst, dry and shriveled skin that's slow to bounce back when pinched into a fold, little or no urinating, low blood pressure, and an irregular heartbeat.",
            'disease' => 'Cholera',
            'disease_description' => 'Cholera is a bacterial disease usually spread through contaminated water. Cholera causes severe diarrhea and dehydration. Left untreated, cholera can be fatal within hours, even in previously healthy people.

            Modern sewage and water treatment have virtually eliminated cholera in industrialized countries. But cholera still exists in Africa, Southeast Asia and Haiti. The risk of a cholera epidemic is highest when poverty, war or natural disasters force people to live in crowded conditions without adequate sanitation.
            
            Cholera is easily treated. Death from severe dehydration can be prevented with a simple and inexpensive rehydration solution.'
        ]);
    }
}
