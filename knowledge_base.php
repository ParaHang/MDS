<?php
	
	//functions
	int diagnosis_yes;
	int diagnosis_maybe;
	int diagnosis_no;
	// common cold
	function commoncold(string[] symptoms, int[] severity ){
		for ($i=0; $i < ; $i++) { 
			if ($symptom[i] = 'runny nose' AND severity[i] = 0) diagnosis_no++;
			if ($symptom[i] = 'runny nose' AND severity[i] = 5) diagnosis_maybe++;
			if ($symptom[i] = 'runny nose' AND severity[i] = 10) diagnosis_yes++;
			if ($symptom[i] = 'fever' AND severity[i] = 0) diagnosis_no++;
			if ($symptom[i] = 'fever' AND severity[i] = 5) diagnosis_maybe++;
			if ($symptom[i] = 'fever' AND severity[i] = 10) diagnosis_no++;
			if ($symptom[i] = 'cough' AND severity[i] = 0) diagnosis_no++;
			if ($symptom[i] = 'cough' AND severity[i] = 5) diagnosis_maybe++;
			if ($symptom[i] = 'cough' AND severity[i] = 10) diagnosis_maybe++;
			if ($symptom[i] = 'headache' AND severity[i] = 0) diagnosis_no++;
			if ($symptom[i] = 'headache' AND severity[i] = 5) diagnosis_maybe++;
			if ($symptom[i] = 'headache' AND severity[i] = 10) diagnosis_no++;
			if ($symptom[i] = 'bodyache' AND severity[i] = 0) diagnosis_no++;
			if ($symptom[i] = 'bodyache' AND severity[i] = 5) diagnosis_maybe++;
			if ($symptom[i] = 'bodyache' AND severity[i] = 10) diagnosis_no++;
			if ($symptom[i] = 'fatigue' AND severity[i] = 0) diagnosis_no++;
			if ($symptom[i] = 'fatigue' AND severity[i] = 5) diagnosis_no++;
			if ($symptom[i] = 'fatigue' AND severity[i] = 10) diagnosis_maybe++;
			if ($symptom[i] = 'sorethroat' AND severity[i] = 0) diagnosis_no++;
			if ($symptom[i] = 'sorethroat' AND severity[i] = 5) diagnosis_maybe++;
			if ($symptom[i] = 'sorethroat' AND severity[i] = 10) diagnosis_yes++;
			if ($symptom[i] = 'sneezing' AND severity[i] = 0) diagnosis_no++;
			if ($symptom[i] = 'sneezing' AND severity[i] = 5) diagnosis_maybe++;
			if ($symptom[i] = 'sneezing' AND severity[i] = 10) diagnosis_yes++;
		}
		float sum = diagnosis_no+diagnosis_maybe+diagnosis_yes;
		float centroid = (diagnosis_yes*100 + diagnosis_maybe*50 + diagnosis_no*0)/sum;

		echo "The probaility of Common Cold is " . centroid"%";
	}



	$disease_name = '';
	switch ($disease_name) {
			    case commoncold:
			        commoncold();
			        break;
			    
			    case asthma:
			        asthma();
			        break;
			    
			    case pneumonia:
			        pneumonia();
			        break;   

			    default:
			        exit(0);
			}



