import { NgModule } from '@angular/core';
import { Routes, RouterModule,CanActivate } from '@angular/router';
import { PartenaireComponent } from './partenaire/partenaire.component';
import { UsersComponent } from './users/users.component';
import { CompteComponent } from './compte/compte.component';
import { AddPartenaireComponent } from './add-partenaire/add-partenaire.component';
import { AddUserComponent } from './add-user/add-user.component';
import { AuthGuard } from './auth.guard';
import { LoginComponent } from './login/login.component';
import { NavbarComponent } from './navbar/navbar.component';
import { DepotComponent } from './depot/depot.component';
import { PasswordChangeComponent } from './password-change/password-change.component';
import { HistoriqueOperationComponent } from './historique-operation/historique-operation.component';
import { TransactionComponent } from './transaction/transaction.component';
import { EditUserComponent } from './edit-user/edit-user.component';
import { TransactionRetraitComponent } from './transaction-retrait/transaction-retrait.component';

const routes: Routes = [
  {path: '', redirectTo:'login',pathMatch:'full'},
  {path: 'home', component: NavbarComponent},
  {path: 'login', component : LoginComponent},
  { path: 'partenaires', component: PartenaireComponent},
  { path: 'utilisateurs', component: UsersComponent},
  { path: 'compte', component: CompteComponent},
  { path: 'addPartenaire', component: AddPartenaireComponent},
  { path: 'addUser', component: AddUserComponent,canActivate:[AuthGuard]},
  { path: 'depot', component: DepotComponent},
  { path: 'passwordChange', component: PasswordChangeComponent},
  { path: 'UserOperations', component: HistoriqueOperationComponent},
  { path: 'envoiTransaction', component: TransactionComponent},
  { path: 'retraitTransaction', component: TransactionRetraitComponent},
  { path: 'editUser/:id', component: EditUserComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
