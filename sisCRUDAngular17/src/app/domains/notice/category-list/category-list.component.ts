import { Component, inject, signal } from '@angular/core';
import { CategoryService } from '../../../service/category.service';
import { Category } from '../../../models/category';
import { RouterLinkWithHref } from '@angular/router';
import { CommonModule } from '@angular/common';
import { ModalComponent } from '../../shared/components/modal/modal.component';
import { CategoryCreateComponent } from '../category-create/category-create.component';
import { ToastrService } from 'ngx-toastr';

@Component({
  selector: 'app-category-list',
  standalone: true,
  imports: [RouterLinkWithHref,CommonModule,ModalComponent,CategoryCreateComponent],
  templateUrl: './category-list.component.html',
  styleUrl: './category-list.component.css'
})
export class CategoryListComponent {
  private categoryService=inject(CategoryService) ;
  private toastr=inject(ToastrService ) ;
  categories=signal<Category[]>([]);
  isModalOpen=false;
  category!: Category;
  ngOnInit() {
    this.getCategories();
  }

  getCategories() {
    this.categoryService.getAll().subscribe({
      next: (data) => {
        this.categories.set(data.data);
        console.log(data.data);
      },
      error: () => {},
    });
  }

  getAllCategories() {
    this.categoryService.getAllCategories().subscribe({
      next: (response) => {
        if (response.data) {
         // this.categories = response.data;
          console.log(response.data);
        }
      },
    });
  }

  loadCategory(category: Category) {
    this.category = category;
    this.openModal();
  }

  deleteCategory(id: number) {
    this.categoryService.deleteCategory(id).subscribe({
      next: (response) => {
       this.toastr.success('Registro eliminado');
        this.getCategories();
      },
    });
  }

  openModal() {
    this.isModalOpen = true;
  }

  closeModal() {
    this.isModalOpen = false;
    this.getCategories();
  }

}
