function changeScheme(e){
    const schemeValue = e.target.value;
    const scheme = document.getElementById("education");
    const intakeEl = document.getElementById("intake");
    const programEl = document.getElementById("programme");
    const resultEl = document.getElementById("resultData");

    if(schemeValue == "Foundation"){
        scheme.innerHTML=`<input type="text" value="Ordinary Level" hidden name="scheme">`;

        resultEl.innerHTML=`<select class="form-control border border-primary" name="scheme_status" required>
                        <option class="hidden"  selected disabled>Select Result Status: </option>
                        <option value="Passed">Pass</option>
                        <option value="Pending">Result Pending</option>
                    </select>`;

        intakeEl.innerHTML = `<select class="form-control border border-primary" name="intake" required>
                                <option class="hidden"  selected disabled>Preffered Intake: </option>
                                <option value="2025 - January">2025 - January</option>
                                <option value="2025 - June">2025 - June</option>
                                <option value="2025 - September">2025 - September</option>
                            </select>`;

        programEl.innerHTML = `<select class="form-control border border-primary" name="programm" required>
                                <option class="hidden"  selected disabled>Preffered programme: </option>
                                <option value="IT Foundation">IT Foundation</option>
                                <option value="Management Foundation">Management Foundation</option>
                            </select>`;

    }else if(schemeValue==="FAB"){
        scheme.innerHTML=`<select class="form-control border border-primary" name="scheme" required>
                                <option class="hidden"  selected disabled>Select A/L Stream: </option>
                                <option value="Maths">Maths</option>
                                <option value="Bio-Science">Bio-Science</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Art">Art</option>
                                <option value="Technology">Technology</option>
                                <option value="London A/L">London A/L</option>
                            </select>`;
        intakeEl.innerHTML = `<select class="form-control border border-primary" name="intake" required>
                            <option class="hidden"  selected disabled>Preffered Intake: </option>
                            <option value="2025 - January">2025 - January</option>
                            <option value="2025 - June">2025 - June</option>
                            <option value="2025 - September">2025 - September</option>
                        </select>`;

        programEl.innerHTML = `<select class="form-control border border-primary" name="programm" required>
                        <option class="hidden"  selected disabled>Preffered programme: </option>
                        <option value="BBA (Hons) Specialising in Business Management">BBA (Hons) Specialising in Business Management</option>
                    </select>`;

        resultEl.innerHTML=`<select class="form-control border border-primary" name="scheme_status" required>
                        <option class="hidden"  selected disabled >Select Result Status: </option>
                        <option value="Passed">Pass</option>
                        <option value="Pending">Result Pending</option>
                    </select>`;
    }else if(schemeValue==="FOC"){
        scheme.innerHTML=`<select class="form-control border border-primary" name="scheme" required>
                                <option class="hidden"  selected disabled>Select A/L Stream: </option>
                                <option value="Maths">Maths</option>
                                <option value="Bio-Science">Bio-Science</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Art">Art</option>
                                <option value="Technology">Technology</option>
                                <option value="London A/L">London A/L</option>
                            </select>`;
        intakeEl.innerHTML = `<select class="form-control border border-primary" name="intake" required>
                            <option class="hidden"  selected disabled>Preffered Intake: </option>
                            <option value="2025 - January">2025 - January</option>
                            <option value="2025 - June">2025 - June</option>
                            <option value="2025 - September">2025 - September</option>
                        </select>`;

        programEl.innerHTML = `<select class="form-control border border-primary" name="programm" required>
                        <option class="hidden"  selected disabled>Preffered programme: </option>
                        <option value="BSc (Hons) in Information Technology">BSc (Hons) in Information Technology</option>
                    </select>`;

        resultEl.innerHTML=`<select class="form-control border border-primary" name="scheme_status" required>
                        <option class="hidden"  selected disabled>Select Result Status: </option>
                        <option value="Passed">Pass</option>
                        <option value="Pending">Result Pending</option>
                    </select>`;
    }



}