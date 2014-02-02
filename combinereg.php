<p>User Registration</p>
                          <form id="form1" name="form1" method="post" action="doctorreg.php?action=register">
                            <table width="348" height="252" border="0">
                              <tbody><tr>
                                <td width="143" bgcolor="#FFFFFF">Name*</td>
                                <td width="195" bgcolor="#FFFFFF"><input value="" type="text" name="name" id="name"></td>
                              </tr>
                              <tr>
                                <td bgcolor="#FFFFFF">Father's Name</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="f_name" id="f_name"></td>
                              </tr>
                              <tr>
                                <td bgcolor="#FFFFFF"><p>Status*</p></td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="status" id="status"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Pictures*</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="pic" id="pic"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Login Id</td>
                                <td bgcolor="#FFFFFF"><input type="text" name="loginId" id="loginId"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Email</td>
                                <td bgcolor="#FFFFFF"><input type="text" name="email" id="email"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Address</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="address" id="address"></td>
                              </tr>
                              <tr>
                                <td height="27" bgcolor="#FFFFFF">Cell</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="cell" id="cell" /></td>
                              </tr>
                              <tr>
                                <td height="27" bgcolor="#FFFFFF">CNIC</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="cnic" id="cnic"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Cell</td>
                                <td bgcolor="#FFFFFF"><input type="radio" name="gender" id="radio" value="Male">
                                  <label for="gender">Male</label>
                                  <input type="radio" name="gender" id="radio2" value="female">
                                <label for="gender">Female</label></td>
                              </tr>
                              <tr>
                                <td height="30" bgcolor="#FFFFFF">Country</td>
                                <td bgcolor="#FFFFFF"><input value="" type="text" name="country" id="country"></td>
                              </tr>
                              <tr>
                                <td height="30" bgcolor="#FFFFFF">Date of Birth</td>
                                <td bgcolor="#FFFFFF"><input value="" type="password" name="dob" id="dob"></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">Type</td>
                                <td height="28" bgcolor="#FFFFFF"><input value="" type="text" name="type" id="type" /></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF"><!--?php echo="" $msg;=""?-->
                                <p>Blood Group</p></td>
                                <td height="28" bgcolor="#FFFFFF"><select name="select" id="select">
                                  <option>A+ve</option>
                                  <option>A-ve</option>
                                  <option>AB+ve</option>
                                  <option>AB-ve</option>
                                  <option>B+ve</option>
                                  <option>B-ve</option>
                                  <option>O+ve</option>
                                  <option>O-ve</option>
                                </select></td>
                              </tr>
                              <tr>
                                <td height="28" bgcolor="#FFFFFF">&nbsp;</td>
                                <td height="28" bgcolor="#FFFFFF">&nbsp;</td>
                              </tr>
                              </tbody>
                            </table>
                          </form>
                          <p><span style="font-weight: bold; font-size: 20px; color: #7C96B1; ">Doctor's Registration!</span>                        </p>
                        <form id="form1" name="form1" method="post" action="patientreg.php?action=register">
                          <table width="416" border="1">
                            <tr>
                              <td width="249">Clinic Name</td>
                              <td width="535">Patient name</td>
                            </tr>
                            <tr>
                              <td>Address</td>
                              <td><input type="text" name="textfield2" id="textfield2" /></td>
                            </tr>
                            <tr>
                              <td>Location</td>
                              <td><input type="text" name="textfield3" id="textfield3" /></td>
                            </tr>
                            <tr>
                              <td>Qualification</td>
                              <td><input type="text" name="textfield4" id="textfield4" /></td>
                            </tr>
                            <tr>
                              <td>Specialization</td>
                              <td><input type="text" name="textfield5" id="textfield5" /></td>
                            </tr>
                            <tr>
                              <td>Practice</td>
                              <td><input type="text" name="textfield6" id="textfield6" /></td>
                            </tr>
                            <tr>
                              <td><input type="submit" name="button2" id="button2" value="Submit" /></td>
                              <td>&nbsp;</td>
                            </tr>
                          </table>
                        </form>
                                  <p><span style="font-weight: bold; font-size: 20px; color: #68DC50; ">Pharmacist's Registration!</span></p>
                                <form id="form1" name="form1" method="post" action="pharmacyreg.php?action=register">
                                            <table width="447" height="94" border="0">
                                              <tbody>
                                              
                                              <tr>
                                                <td width="153" height="30" valign="top">Shop Address</td>
                                                <td width="287"><textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
                                              </tr>
                                              <tr>
                                                <td height="28" align="left">Registration No.</td>
                                                <td height="28"><input value="" type="text" name="regno" id="regno"></td>
                                              </tr>
                                              <tr>
                                                <td height="28" colspan="2" align="right"><input type="submit" name="button" id="button" value="Register"></td>
                                              </tr>
                                            </tbody></table>
                                          </form>