<?php 
/*Traits allow you to reuse a set of methods freely in many different classes that does not need to be in the same class hierarchy.
Trait is similar to class but it is only for grouping methods in a fine-grained and consistent way. It is not allowed to instantiate a trait on its own.
*/

 
trait Preprocessor{
 function preprocess() {
 echo 'Preprocess...done'. '<br/>';
 }
}
trait Compiler{
 function compile() {
 echo 'Compile code... done'. '<br/>';
 }
}
 
trait Assembler{
 function createObjCode() {
 echo 'Create the object code files... done.' . '<br/>';
 }
}
 
trait Linker{
 function createExec(){
 echo 'Create the executable file...done' . '<br/>';
 }
}
 
class IDE{
 use Preprocessor, Compiler, Assembler, Linker;
 
 function run() {
 $this->preprocess();
 $this->compile();
 $this->createObjCode();
 $this->createExec();
 
 echo 'Execute the file...done' . '<br/>';
 }
}
 
$ide = new IDE();
$ide->run();

?>