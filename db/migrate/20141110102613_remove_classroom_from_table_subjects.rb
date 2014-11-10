class RemoveClassroomFromTableSubjects < ActiveRecord::Migration
  def change
    remove_column :subjects, :classroom, :integer
  end
end
