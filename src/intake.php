<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intake Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Intake Form</h1>
    </header>
    <main>
        <form id="intakeForm" action="submit_intake.php" method="POST">
            <section>
                <h2>About You</h2>
                <label for="age">What is your age?</label>
                <input type="number" id="age" name="age"><br>
                <label for="gender">What gender do you identify with?</label>
                <select id="gender" name="gender">
                    <option value="woman">Woman</option>
                    <option value="man">Man</option>
                    <option value="transgender">Transgender</option>
                    <option value="non-binary">Non-binary</option>
                    <option value="two-spirit">Two-Spirit</option>
                    <option value="self-describe">Prefer to self-describe</option>
                    <option value="prefer-not-to-say">Prefer not to say</option>
                </select><br>
                <label for="sexual_orientation">What is your sexual orientation? (Optional)</label>
                <input type="text" id="sexual_orientation" name="sexual_orientation"><br>
                <label for="racial_ethnic_background">What is your racial or ethnic background?</label>
                <input type="text" id="racial_ethnic_background" name="racial_ethnic_background"><br>
                <label for="birthplace">Where were you born (city, province/state, country)?</label>
                <input type="text" id="birthplace" name="birthplace"><br>
                <label for="living_duration">How long have you been living in Cobourg?</label>
                <input type="text" id="living_duration" name="living_duration"><br>
            </section>
            <section>
                <h2>Physical and Mental Health</h2>
                <label for="disability">Do you have a visible or invisible disability?</label>
                <select id="disability" name="disability">
                    <option value="visible">Visible</option>
                    <option value="invisible">Invisible</option>
                    <option value="both">Both</option>
                    <option value="no">No</option>
                </select><br>
                <label for="medications">Do you take any prescribed medications?</label>
                <input type="text" id="medications" name="medications"><br>
                <label for="medication_access">Are you able to access your medications regularly?</label>
                <input type="text" id="medication_access" name="medication_access"><br>
                <label for="dietary_needs">Do you have any dietary needs (allergies, restrictions, etc.)?</label>
                <input type="text" id="dietary_needs" name="dietary_needs"><br>
                <label for="dietary_needs_met">Are your dietary needs being met in your current living situation?</label>
                <input type="text" id="dietary_needs_met" name="dietary_needs_met"><br>
                <label for="family_doctor">Do you have a family doctor or primary care provider?</label>
                <input type="text" id="family_doctor" name="family_doctor"><br>
                <label for="mental_health_condition">Have you ever been diagnosed with a mental health condition?</label>
                <input type="text" id="mental_health_condition" name="mental_health_condition"><br>
                <label for="mental_health_support">If not diagnosed, do you feel like your mental health is poor or could use support?</label>
                <input type="text" id="mental_health_support" name="mental_health_support"><br>
                <label for="suicide_attempt">Have you ever attempted suicide?</label>
                <input type="text" id="suicide_attempt" name="suicide_attempt"><br>
                <label for="overdose_experience">Have you ever experienced an overdose?</label>
                <input type="text" id="overdose_experience" name="overdose_experience"><br>
            </section>
            <section>
                <h2>Family Background and Trauma History</h2>
                <label for="family_history">Do you have a family history of any of the following? (Check all that apply)</label><br>
                <input type="checkbox" name="family_history[]" value="homelessness"> Homelessness<br>
                <input type="checkbox" name="family_history[]" value="substance_use"> Substance use<br>
                <input type="checkbox" name="family_history[]" value="mental_health_struggles"> Mental health struggles<br>
                <input type="checkbox" name="family_history[]" value="suicide"> Suicide<br>
                <input type="checkbox" name="family_history[]" value="overdose"> Overdose<br>
                <input type="checkbox" name="family_history[]" value="none"> None of the above<br>
                <label for="lost_someone">Have you lost someone close to you?</label>
                <select id="lost_someone" name="lost_someone">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
                <label for="cause_of_loss">If yes: What was the cause? (e.g., illness, overdose, suicide)</label>
                <input type="text" id="cause_of_loss" name="cause_of_loss"><br>
                <label for="childhood_experiences">Have you experienced any of the following as a child or youth? (Check all that apply)</label><br>
                <input type="checkbox" name="childhood_experiences[]" value="emotional_abuse"> Emotional abuse<br>
                <input type="checkbox" name="childhood_experiences[]" value="physical_abuse"> Physical abuse<br>
                <input type="checkbox" name="childhood_experiences[]" value="sexual_abuse"> Sexual abuse<br>
                <input type="checkbox" name="childhood_experiences[]" value="emotional_neglect"> Emotional neglect<br>
                <input type="checkbox" name="childhood_experiences[]" value="physical_neglect"> Physical neglect<br>
                <input type="checkbox" name="childhood_experiences[]" value="parental_separation_divorce"> Parental separation/divorce<br>
                <input type="checkbox" name="childhood_experiences[]" value="substance_use_household"> Substance use in the household<br>
                <input type="checkbox" name="childhood_experiences[]" value="mental_illness_household"> Mental illness in the household<br>
                <input type="checkbox" name="childhood_experiences[]" value="domestic_violence"> Domestic violence<br>
                <input type="checkbox" name="childhood_experiences[]" value="incarceration_family_member"> Incarceration of a family member<br>
                <input type="checkbox" name="childhood_experiences[]" value="poverty_financial_hardship"> Poverty/financial hardship<br>
                <input type="checkbox" name="childhood_experiences[]" value="none"> None of the above<br>
                <input type="checkbox" name="childhood_experiences[]" value="prefer_not_to_say"> Prefer not to say<br>
            </section>
            <section>
                <h2>Substance Use and Harm Reduction</h2>
                <label for="current_substance_use">Do you currently use any substances (alcohol, tobacco, or drugs)?</label>
                <select id="current_substance_use" name="current_substance_use">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
                <label for="substances_used">If yes, which ones do you use? (Check all that apply)</label><br>
                <input type="checkbox" name="substances_used[]" value="alcohol"> Alcohol<br>
                <input type="checkbox" name="substances_used[]" value="cannabis"> Cannabis<br>
                <input type="checkbox" name="substances_used[]" value="cocaine_crack"> Cocaine/Crack<br>
                <input type="checkbox" name="substances_used[]" value="methamphetamines"> Methamphetamines<br>
                <input type="checkbox" name="substances_used[]" value="heroin"> Heroin<br>
                <input type="checkbox" name="substances_used[]" value="prescription_opioids"> Prescription opioids (not prescribed)<br>
                <input type="checkbox" name="substances_used[]" value="fentanyl"> Fentanyl<br>
                <input type="checkbox" name="substances_used[]" value="benzodiazepines"> Benzodiazepines<br>
                <input type="checkbox" name="substances_used[]" value="tobacco_nicotine"> Tobacco/Nicotine<br>
                <input type="checkbox" name="substances_used[]" value="other"> Other<br>
                <label for="substance_use_frequency">How often do you use substances?</label>
                <select id="substance_use_frequency" name="substance_use_frequency">
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="occasionally">Occasionally</option>
                    <option value="rarely">Rarely</option>
                </select><br>
                <label for="addiction_feeling">Do you feel that you have an addiction?</label>
                <select id="addiction_feeling" name="addiction_feeling">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not sure</option>
                </select><br>
                <label for="addiction_type">If yes, would you describe your addiction as:</label>
                <select id="addiction_type" name="addiction_type">
                    <option value="substance_related">Substance-related</option>
                    <option value="behavioral">Behavioral (e.g., gambling, internet use, sex)</option>
                    <option value="both">Both</option>
                </select><br>
                <label for="treatment_rehab">Have you ever been through a treatment or rehab program?</label>
                <select id="treatment_rehab" name="treatment_rehab">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
                <label for="rehab_experience">If yes: How was your experience?</label>
                <input type="text" id="rehab_experience" name="rehab_experience"><br>
                <label for="harm_reduction_supplies">Do you use harm reduction supplies (e.g., clean needles, pipes, naloxone)?</label>
                <select id="harm_reduction_supplies" name="harm_reduction_supplies">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
                <label for="safe_consumption_site">Would you use a supervised safe consumption site if it were available?</label>
                <select id="safe_consumption_site" name="safe_consumption_site">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    <option value="not_sure">Not sure</option>
                </select><br>
            </section>
            <section>
                <h2>Housing and Shelter Use</h2>
                <label for="pets">Do you currently have pets with you?</label>
                <select id="pets" name="pets">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select><br>
                <label for="current_stay">Where are you currently staying most nights?</label>
                <select id="current_stay" name="current_stay">
                    <option value="warming_room">Warming room</option>
                    <option value="shelter_bed">Shelter bed</option>
                    <option value="transitional_housing">Transitional housing</option>
                    <option value="outside">Outside</option>
                    <option value="other">Other</option>
                </select><br>
                <label for="homeless_cause">How did you become homeless? (Check all that apply)</label><br>
                <input type="checkbox" name="homeless_cause[]" value="eviction"> Eviction<br>
                <input type="checkbox" name="homeless_cause[]" value="job_loss"> Job loss<br>
                <input type="checkbox" name="homeless_cause[]" value="family_breakdown"> Family or relationship breakdown<br>
                <input type="checkbox" name="homeless_cause[]" value="substance_use"> Substance use<br>
                <input type="checkbox" name="homeless_cause[]" value="mental_health"> Mental health<br>
                <input type="checkbox" name="homeless_cause[]" value="domestic_violence"> Domestic violence<br>
                <input type="checkbox" name="homeless_cause[]" value="released_jail_hospital"> Released from jail or hospital<br>
                <input type="checkbox" name="homeless_cause[]" value="aging_out_of_care"> Aging out of care<br>
                <input type="checkbox" name="homeless_cause[]" value="other"> Other<br>
                <label for="homeless_duration">How long have you been experiencing homelessness?</label>
                <select id="homeless_duration" name="homeless_duration">
                    <option value="less_than_1_month">Less than 1 month</option>
                    <option value="1_6_months">1–6 months</option>
                    <option value="6_12_months">6–12 months</option>
                    <option value="1_3_years">1–3 years</option>
                    <option value="over_3_years">Over 3 years</option>
                </select><br>
            </section>
            <section>
                <h2>Income, Employment, and Identification</h2>
                <label for="employment_status">What is your employment status?</label>
                <select id="employment_status" name="employment_status">
                    <option value="employed_full_time">Employed full-time</option>
                    <option value="employed_part_time">Employed part-time</option>
                    <option value="casual_temporary_work">Casual or temporary work</option>
                    <option value="unemployed">Unemployed</option>
                    <option value="unable_to_work">Unable to work</option>
                    <option value="other">Other</option>
                </select><br>
                <label for="income_source">What is your current source of income?</label>
                <select id="income_source" name="income_source">
                    <option value="job">Job</option>
                    <option value="social_assistance">Social assistance</option>
                    <option value="disability_benefits">Disability benefits</option>
                    <option value="no_income">No income</option>
                    <option value="other">Other</option>
                </select><br>
                <label for="identification">Do you currently have any of the following?</label><br>
                <input type="checkbox" name="identification[]" value="government_issued_id"> Government-issued ID<br>
                <input type="checkbox" name="identification[]" value="health_card"> Health card<br>
                <input type="checkbox" name="identification[]" value="drivers_license"> Driver’s license<br>
                <input type="checkbox" name="identification[]" value="vehicle_access"> Vehicle access<br>
            </section>
            <section>
                <h2>Education and Skills</h2>
                <label for="education_level">What is your highest level of education?</label>
                <select id="education_level" name="education_level">
                    <option value="no_formal_education">No formal education</option>
                    <option value="some_high_school">Some high school</option>
                    <option value="high_school_diploma_ged">High school diploma or GED</option>
                    <option value="college_diploma">College diploma</option>
                    <option value="university_degree">University degree</option>
                    <option value="trade_apprenticeship">Trade or apprenticeship</option>
                    <option value="other">Other</option>
                </select><br>
                <label for="job_life_skills">Do you have any job or life skills you’d like to share?</label>
                <input type="text" id="job_life_skills" name="job_life_skills"><br>
            </section>
            <section>
                <h2>Your Shelter Experience and Daily Life</h2>
                <label for="shelter_experience">What is working well for you in the shelter or services you’re using?</label>
                <input type="text" id="shelter_experience" name="shelter_experience"><br>
                <label for="improvements_needed">What isn’t working or could be improved?</label>
                <input type="text" id="improvements_needed" name="improvements_needed"><br>
                <label for="community_supports">What community supports or services do you access (e.g., outreach teams, food banks)?</label>
                <input type="text" id="community_supports" name="community_supports"><br>
                <label for="stability_support">Is there someone or something that has helped you feel more stable or hopeful?</label>
                <input type="text" id="stability_support" name="stability_support"><br>
                <label for="typical_day">What does a typical day look like for you right now?</label>
                <input type="text" id="typical_day" name="typical_day"><br>
                <label for="community_view">How do you feel the community views people experiencing homelessness?</label>
                <select id="community_view" name="community_view">
                    <option value="compassion">With compassion</option>
                    <option value="fear">With fear</option>
                    <option value="judgment">With judgment</option>
                    <option value="invisible">As invisible</option>
                    <option value="other">Other</option>
                </select><br>
            </section>
            <section>
                <h2>Hopes and Moving Forward</h2>
                <label for="moving_forward_help">What do you think could help you move forward or improve your situation?</label>
                <input type="text" id="moving_forward_help" name="moving_forward_help"><br>
                <label for="future_goals">What are your goals or hopes for the future?</label>
                <input type="text" id="future_goals" name="future_goals"><br>
                <label for="service_connections">Would you like help connecting to services such as:</label><br>
                <input type="checkbox" name="service_connections[]" value="mental_health_support"> Mental health support<br>
                <input type="checkbox" name="service_connections[]" value="substance_use_treatment"> Substance use treatment or harm reduction<br>
                <input type="checkbox" name="service_connections[]" value="housing"> Housing<br>
                <input type="checkbox" name="service_connections[]" value="employment_training"> Employment or training<br>
                <input type="checkbox" name="service_connections[]" value="medical_care"> Medical care<br>
                <input type="checkbox" name="service_connections[]" value="id_paperwork"> ID or paperwork<br>
                <input type="checkbox" name="service_connections[]" value="other"> Other<br>
                <label><input type="checkbox" name="service_connections[]" value="yes"> Yes – I would like to be connected</label><br>
                <label><input type="checkbox" name="service_connections[]" value="no"> No – Not at this time</label><br>
            </section>
            <section>
                <h2>Progress</h2>
                <progress id="progressBar" value="0" max="100"></progress>
            </section>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Cobourg Homeless Intake Form</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
