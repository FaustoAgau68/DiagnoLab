function diagnoseTools(event) {
    const wbc = parseInt(document.getElementById("wbc").value);
    const hemoglobin = parseInt(document.getElementById("hemoglobin").value);
    const plateletes = parseInt(document.getElementById("plateletes").value);

    let wbc_normal = [4, 11];
    let hemo_normal = [12, 18];
    let plate_normal = [150, 450];

    let wbc_result;
    let hemo_result;
    let plate_result;

    // check perbandingan nilai WBC
    if (wbc >= wbc_normal[0] && wbc <= wbc_normal[1]) {
        wbc_result = "YOUR BLOOD COUNT FOR WBC IS IN NORMAL RANGE";
    } else if (wbc < wbc_normal[0]) {
        wbc_result = "LOW Potential Condition Issue : (VIRAL INFECTION, AUTO IMUNE)";
    } else {
        wbc_result = "<p style='color: red;'>HIGH BLOOD COUNT Potential Condition Issue : (INFECTION, INFLAMATORY DESEASE)</p>";
    }

    // check perbandingan nilai HEMOGLOBIN
    if (hemoglobin >= hemo_normal[0] && hemoglobin <= hemo_normal[1]) {
        hemo_result = "YOUR BLOOD COUNT FOR HEMOGLOBIN IS IN NORMAL RANGE";
    } else if (hemoglobin < hemo_normal[0]) {
        hemo_result = "LOW Potential Condition Issue : (ANEMIA, Iron-deficiency anemia)";
    } else {
        hemo_result = "<p style='color: red;'>HIGH BLOOD COUNT Potential Condition Issue : (Polycythemia)</p>";
    }


    // check perbandingan nilai PLATELETS
    if (plateletes >= plate_normal[0] && plateletes <= plate_normal[1]) {
        plate_result = "YOUR BLOOD COUNT FOR PLATELETES IS IN NORMAL RANGE";
    } else if (plateletes < plate_normal[0]) {
        plate_result = "LOW Potential Condition Issue : (Thrombocytopenia)";
    } else {
        plate_result = "<p style='color: red;'>HIGH BLOOD COUNT Potential Condition Issue : (Thrombocytosis)</p>";
    }


    let result_test = `
     <div class="row justify-content-center">
     <div class="col-md-6 col-lg-5 mb-4">
                <div class="card shadow rounded-4 p-4 border-0" style="background-image: linear-gradient(to right,rgb(152, 155, 201), #e3e4e4);">
                    <h3 class="mb-4 text-center"><strong>Diagnostics Result</strong></h3>
                    <!-- Name -->
                    <div class="mb-2">
                       <h6 class="d-inline "><span></span>${wbc_result}</h6>
                    </div>
                    <div class="form-floating mb-2">
                        <h6 class="d-inline "><span></span>${hemo_result}</h6>
                    </div>
                    <div class="form-floating mb-2">
                       <h6 class="d-inline "><span"></span>${plate_result}</h6>
                    </div>
                </div>
                </div>
            </div>`

    if (wbc != "") {
        document.getElementById("output-diagnostic").innerHTML += result_test;
    };

}